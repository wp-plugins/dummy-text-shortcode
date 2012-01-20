<?php
/*
Plugin Name: Dummy Text Shortcode
Plugin URI: http://andrewnorcross.com/plugins/dummy-text-shortcode/
Description: Adds dummy text via a shortcode. Just place the shortcode [dummy] in any post or page in the HTML tab.
Version: 1.01
Author: norcross
Author URI: http://andrewnorcross.com
*/

/*  Copyright 2012 Andrew Norcross

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; version 2 of the License (GPL v2) only.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function lorem_filler($content = null) {
		ob_start();
		echo '
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus massa non orci semper porttitor. Maecenas mi erat, tristique sed consectetur ut, pharetra non lacus. Sed hendrerit cursus condimentum. Sed pulvinar eros ut lectus faucibus sollicitudin. Vivamus consequat nunc nec nisi bibendum quis tempor eros dignissim. Duis bibendum faucibus nibh nec venenatis. Morbi ante erat, blandit id imperdiet id, pretium a lectus.<p>
		<p><img class="alignright" alt="I am on a boat" src="'.WP_PLUGIN_URL.'/dummy-text-shortcode/img/smallboat.jpg" title="I am on a boat" width="200" height="132" />Suspendisse est elit, vulputate lacinia tempor et, hendrerit quis justo. Vivamus quis velit lectus, eu iaculis mi. Etiam sollicitudin convallis tempus. Integer mattis, est vel tempor fringilla, massa odio posuere dui, vel tincidunt risus felis et dui. Nulla id metus risus, id condimentum ante. Suspendisse tincidunt, urna non lacinia convallis, lectus nulla dignissim sapien, porta imperdiet nibh felis nec felis. Cras interdum iaculis nulla ut hendrerit. Aliquam ultrices est vitae lorem mollis sodales. Sed iaculis laoreet felis at volutpat.</p>
<img alt="I am on a boat" src="'.WP_PLUGIN_URL.'/dummy-text-shortcode/img/boat.jpg" title="I am on a boat" width="435" height="288" />
<h1>HTML Ipsum Presents</h1>
	       
<p><img class="alignleft" alt="I am on a boat" src="'.WP_PLUGIN_URL.'/dummy-text-shortcode/img/smallboat.jpg" title="I am on a boat" width="200" height="132" /><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

<h2>Header Level 2</h2>
	       
<ol>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ol>

<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

<h3>Header Level 3</h3>

<ul>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ul>
<h3>Definition List</h3>

<dl>
<dt>Definition List Title</dt>
<dd>This is a definition list division.</dd>
</dl>
<pre><code>
#header h1 a { 
	display: block; 
	width: 300px; 
	height: 80px; 
}
</code></pre>
<hr />
<h2 id="tables">Tables</h2>
<table cellspacing="0" cellpadding="0">
<tr>
<th>Table Header 1</th>
<th>Table Header 2</th>
<th>Table Header 3</th>

</tr>
<tr>
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
<tr class="even">
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>

<tr>
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
</table>
<hr />
<h2 id="misc">Misc Stuff &#8211; abbr, acronym, pre, code, sub, sup, etc.</h2>
<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>
<p>Thats it folks!</p>
';
		$displaylorem = ob_get_clean();
		return $displaylorem;
		}
add_shortcode("dummy", "lorem_filler");
?>