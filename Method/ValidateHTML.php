<?php
namespace GDO\W3CValidator\Method;

use GDO\Core\Method;
use GDO\Core\GDT_Module;
use GDO\Core\GDT_Method;

final class ValidateHTML extends Method
{
    public function gdoParameters()
    {
        return [
            GDT_Module::make('module')->notNull(),
            GDT_Method::make('method')->notNull(),
        ];
    }
    
    public function execute()
    {
        echo "HI!";
    }
    
}
