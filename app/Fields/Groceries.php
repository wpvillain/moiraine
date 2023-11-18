<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;
use App\Fields\Partials\ListItems;
use App\Fields\Partials\Images;

class Groceries extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $groceries = new FieldsBuilder('groceries');

        $groceries
            ->setLocation('post_type', '==', 'post');

        $groceries
        ->addFields($this->get(ListItems::class));

        $groceries
        ->addFields($this->get(Images::class));


        return $groceries->build();
    }
}
