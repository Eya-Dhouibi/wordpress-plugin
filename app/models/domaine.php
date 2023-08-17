<?php

class Domaine extends MvcModel {

    var $display_field = 'name';
	var $has_many= array('Cv');
}
