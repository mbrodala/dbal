<?php ?>
Doctrine supports many special indexes. These include Mysql FULLTEXT and Pgsql GiST indexes.
In the following example we define a Mysql FULLTEXT index for the field 'content'.
<br \><br \>
<?php 
renderCode("<?php
class Article 
{
    public function setTableDefinition() 
    {
    	\$this->hasColumn('name', 'string');
        \$this->hasColumn('content', 'string');
    }
    public function setUp() 
    {
        \$this->option('index', 
                        array('content' =>
                            array('content' => 
                                array('fulltext' => true));
    }
}
?>");
