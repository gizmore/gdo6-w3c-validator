<?php
namespace GDO\W3CValidator;

use GDO\Core\GDO;
use GDO\Core\GDT_Module;
use GDO\Core\GDT_Method;

final class GDO_W3C_Checked extends GDO
{
    public function gdoColumns()
    {
        return [
            GDT_Module::make('w3c_module')->primary(),
            GDT_Method::make('w3c_method')->primary(),
        ];
    }
    
    public function getClasses()
    {
        return [
            GDO_W3C_Checked::class,
        ];
    }
    
    
}
