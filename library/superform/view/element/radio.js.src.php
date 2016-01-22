<?php
/*
 *  Copyright (C) 2012 Platoniq y Fundación Goteo (see README for details)
 *	This file is part of Goteo.
 *
 *  Goteo is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Goteo is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with Goteo.  If not, see <http://www.gnu.org/licenses/agpl.txt>.
 *
 */
?>
$(function () {
    
    var li = $('#<?php echo $this['id'] ?>').closest('li.element');
    
    var radios = li.children('div.contents').find('input[type="radio"]');        
    
    if (radios.length) {

       radios.unbind('change');

       radios.change(function () {
       
           li.addClass('busy');
           
           window.Superform.update(li, null, function () {
               li.removeClass('busy');
           });           

       });
    }   
});

