<?php

namespace App\Schema;

use Bono\App;
use Norm\Norm;
use App\Schema\NormArray;
use Norm\Type\NormArray as TypeArray;

class ArrayReference extends NormArray
{
    protected $foreign;
    protected $foreignLabel;
    protected $foreignKey;
    protected $restrict;

    public function to($foreign, $foreignKey, $foreignLabel)
    {
        $this->foreign = $foreign;
        $this->foreignKey = $foreignKey;
        $this->foreignLabel = $foreignLabel;

        $this->set('foreign', $foreign);
        $this->set('foreignKey', $foreignKey);
        $this->set('foreignLabel', $foreignLabel);

        return $this;
    }

    public function formatReadonly($value, $entry = null)
    {
        return '
            <div class="col-sm-9">
                <input type="text" name="" value="'.$this->cell($value, $entry).'" readonly>
            </div>
        ';
    }

    public function formatInput($value, $entry = null)
    {
        $foreign = Norm::factory($this->foreign);
        $array = array();

        if ($value instanceof TypeArray) {
            $value = $value->toArray();
        }

        if(!is_array($value)){
            $value = array($value);
        }

        if ($this['readonly']) {
            if ($format = $this['inputFormat']) {
                return $format($value, $entry, $this);
            } else {
                if (is_array($value)) {
                    foreach ($value as $key => $v) {
                        if (is_null($this->foreignKey)) {
                            $entry = Norm::factory($this->foreign)->findOne($v);
                        } else {
                            $criteria = array($this->foreignKey => $v);
                            $entry = Norm::factory($this->foreign)->findOne($criteria);
                        }

                        $array[] = $entry->get($this->foreignLabel);
                    }

                    return '<span class="field">'.implode(", ", $array).'</span>';
                }
            }

            if (is_null($this->foreignKey)) {
                $entry = Norm::factory($this->foreign)->findOne($this->foreignKey);
            } else {
                $criteria = array($this->foreignKey => $value);
                $entry = Norm::factory($this->foreign)->findOne($criteria);
            }

            if (is_callable($this->foreignLabel)) {
                $getLabel = $this->foreignLabel;
                $label = $getLabel($entry);
            } else {
                $label = $entry->get($this->foreignLabel);
            }

            return '<span class="field">'.$label.'</span>';
        }

        if ($format = $this['inputFormat']) {
            return $format($value, $entry, $this);
        } else {
            $options = array();
            $html = '<input type="hidden" name="'.$this['name'].'" value="">';

            if(count($this->restrict) > 0) {
                $entries = $foreign->find($this->restrict);
            }else{
                $entries = $foreign->find();
            }

            $data = array();

            foreach ($entries as $entry) {
                $data[] = $entry->toArray();
            }

            $value = (is_null($value)) ? array() : $value;

            $app = App::getInstance();

            $template = $app->theme->resolve('_schema/array-reference-orig');

            return $app->theme->partial($template, array(
                'self' => $this,
                'value' => $value,
                'entries' => $data,
                'criteria' => $this['byCriteria'],
            ));
        }

    }

    public function getRaw($value) {
        return $value;
    }

    public function cell($value, $entry = null)
    {
        $label = '';
        $array = array();

        if (empty($value)) {
            return '';
        }

        if($value instanceof TypeArray) {
            $value = $value->toArray();
        }

        if (empty($value)) {
            return '';
        }

        foreach ($value as $key => $v) {
            if (is_null($this->foreignKey)) {
                $model = Norm::factory($this->foreign)->findOne($v);
            } else {
                $criteria = array($this->foreignKey => $v);
                $model = Norm::factory($this->foreignKey)->findOne($criteria);
            }

            if (is_callable($this->foreignLabel)) {
                $getLabel = $this->foreignLabel;
                $array[] = $getLabel($model);
            } else {
                if ($model) {
                    $array[] = $model->get($this->foreignLabel);
                }

            }
        }

        return implode(', ', $array);
    }

    public function toJSON($value)
    {
        $foreignCollection = Norm::factory($this->foreign);
        $result = array();

        foreach($value as $k => $v) {
            if (is_null($this->foreignKey)) {
                $result[$k] = $foreignCollection->findOne($v);
            } else {
                $result[$k] = $foreignCollection->findOne(array($this['foreignKey'] => $v));
            }
        }

        return $result;
    }
}