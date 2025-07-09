<?php

/**
 * @package  Crowdin
 * @author   Alan Hardman <alan@phpizza.com>
 * @version  1.0.0
 */

namespace Plugin\Crowdin;

class Base extends \Plugin
{
    protected $locale = "ach-UG";

    protected $jsCode = <<<EOT
<script type="text/javascript">
var _jipt = [];
_jipt.push(['project', 'phproject']);
</script>
<script type="text/javascript" src="//cdn.crowdin.com/jipt/jipt.js"></script>
EOT;

    /**
     * Initialize the plugin
     */
    public function _load()
    {
        $f3 = \Base::instance();
        $f3->mset([
            "LOCALES" => "app/plugin/crowdin/dict-crowdin/",
            "FALLBACK" => $this->locale,
            "LANGUAGE" => $this->locale,
        ]);
        $this->_addJs($this->jsCode);
    }
}
