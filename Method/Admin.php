<?php
namespace GDO\W3CValidator\Method;

use GDO\UI\MethodPage;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Link;
use GDO\Core\Application;
use GDO\Core\MethodAdmin;

final class Admin extends MethodPage
{
    use MethodAdmin;
    
    public function adminTabs()
    {
        if (Application::instance()->isHTML())
        {
            GDT_Page::$INSTANCE->topTabs->addField(
                GDT_Link::make('link_validate_html')->href('ValidateHTML'),
                GDT_Link::make('link_validate_css')->href('ValidateCSS'),
            );
        }
    }
    
    public function beforeExecute()
    {
        $this->renderNavBar('W3CValidator');
        $this->adminTabs();
    }
    
}
