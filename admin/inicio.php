<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <? require 'comunes/head.php'; ?>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <? include 'comunes/header.php';?>
        </div> <!-- End #header -->
        
		<div class="container_12">
        

            
            <!-- Dashboard icons -->
            <? include 'comunes/acciones.php'; ?>
             <!-- End .grid_7 -->
            
            <!-- Account overview -->
            <div class="grid_5">
                <div class="module">
                        <h2><span>Account overview</span></h2>
                        
                        <div class="module-body">
                        
                        	<p>
                                <strong>User: </strong>User X<br />
                                <strong>Your last visit was on: </strong>20 January 2010,<br />
                                <strong>From IP: </strong>000.000.00.00
                            </p>
                        
                             <div>
                                 <div class="indicator">
                                     <div style="width: 23%;"></div><!-- change the width value (23%) to dynamically control your indicator -->
                                 </div>
                                 <p>Your storage space: 23 MB out of 100MB</p>
                             </div>
                             
                             <div>
                                 <div class="indicator">
                                     <div style="width: 100%;"></div><!-- change the width value (100%) to dynamically control your indicator -->
                                 </div>
                                 <p>Your bandwidth (January): 1 GB out of 1 GB</p>
                             </div>
                             
                        	<p>
                                Need to switch to a bigger plan?<br />
                                <a href="src/">click here</a><br />
                            </p>

                        </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End .grid_5 -->
            
            <div style="clear:both;"></div>
            
            
            
            <div class="grid_12">
                
                <!-- Notification boxes -->

                
                <div class="bottom-spacing">
                
                    <!-- Button -->
                    <div class="float-right">
                        <a href="src/" class="button">
                        	<span>Nuevo Post <img src="src/plus-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/plus-small.gif" width="12" height="9" alt="New article" /></span>
                        </a>
                    </div>
                    
                    <!-- Table records filtering -->
                    Filter: 
                    <select class="input-short">
                    	<option value="1" selected="selected">Select filter</option>
                        <option value="2">Created last week</option>
                        <option value="3">Created last month</option>
                        <option value="4">Edited last week</option>
                        <option value="5">Edited last month</option>
                    </select>
                    
                </div>
                
                
                <!-- Example table -->
                <div class="module">
                	<h2><span>Sample table</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:20%">Title</th>
                                    <th style="width:21%">Author</th>
                                    <th style="width:13%">Category</th>
                                    <th style="width:13%">Pages</th>
                                    <th style="width:13%">Price</th>
                                    <th style="width:15%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="src/">Don Quixote</a></td>
                                    <td>Cervantes</td>
                                    <td>adventure</td>
                                    <td>992</td>
                                    <td>$11.55</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="src/tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="src/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="src/balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="src/bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td><a href="src/">Lord Jim</a></td>
                                    <td>Joseph Conrad</td>
                                    <td>thriller</td>
                                    <td>400</td>
                                    <td>$6.95</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td><a href="src/">Inferno</a></td>
                                    <td>Dante</td>
                                    <td>drama</td>
                                    <td>528</td>
                                    <td>$8.76</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">4</td>
                                    <td><a href="src/">David Copperfield</a></td>
                                    <td>Charles Dickens</td>
                                    <td>literary</td>
                                    <td>1024</td>
                                    <td>$9.00</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">5</td>
                                    <td><a href="src/">Crime and Punishment</a></td>
                                    <td>Fyodor Dostoevsky</td>
                                    <td>world literature</td>
                                    <td>592</td>
                                    <td>$10.85</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">6</td>
                                    <td><a href="src/">Faust</a></td>
                                    <td>Johann Wolfgang von Goethe</td>
                                    <td>drama</td>
                                    <td>464</td>
                                    <td>$5.95</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">7</td>
                                    <td><a href="src/">Lord of the Flies</a></td>
                                    <td>William Golding</td>
                                    <td>drama</td>
                                    <td>190</td>
                                    <td>$15.88</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">8</td>
                                    <td><a href="src/">A Farewell To Arms</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>romance</td>
                                    <td>304</td>
                                    <td>$22.80</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">9</td>
                                    <td><a href="src/">The Old Man and the Sea</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>adventure</td>
                                    <td>112</td>
                                    <td>$4.63</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">10</td>
                                    <td><a href="src/">The Snows of Kilimanjaro</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>adventure</td>
                                    <td>144</td>
                                    <td>$19.00</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">11</td>
                                    <td><a href="src/">The Sun Also Rises</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>drama</td>
                                    <td>256</td>
                                    <td>$10.20</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">12</td>
                                    <td><a href="src/">The Metamorphosis</a></td>
                                    <td>Franz Kafka</td>
                                    <td>existentialism</td>
                                    <td>94</td>
                                    <td>$9.95</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">13</td>
                                    <td><a href="src/">One Flew Over the Cuckoo's Nest</a></td>
                                    <td>Ken Kesey</td>
                                    <td>thriller</td>
                                    <td>288</td>
                                    <td>$10.88</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">14</td>
                                    <td><a href="src/">Moby Dick</a></td>
                                    <td>Herman Melville</td>
                                    <td>world literature</td>
                                    <td>464</td>
                                    <td>$5.00</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">15</td>
                                    <td><a href="src/">The Crucible</a></td>
                                    <td>Arthur Miller</td>
                                    <td>drama</td>
                                    <td>176</td>
                                    <td>$10.01</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">16</td>
                                    <td><a href="src/">Death of a Salesman</a></td>
                                    <td>Arthur Miller</td>
                                    <td>drama</td>
                                    <td>448</td>
                                    <td>$12.24</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">17</td>
                                    <td><a href="src/">Paradise Lost</a></td>
                                    <td>John Milton</td>
                                    <td>christianity</td>
                                    <td>512</td>
                                    <td>$9.24</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">18</td>
                                    <td><a href="src/">Animal Farm</a></td>
                                    <td>George Orwell</td>
                                    <td>criticism &amp; theory</td>
                                    <td>113</td>
                                    <td>$9.85</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">19</td>
                                    <td><a href="src/">Hamlet</a></td>
                                    <td>William Shakespeare</td>
                                    <td>tragedy</td>
                                    <td>400</td>
                                    <td>$5.99</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">20</td>
                                    <td><a href="src/">Julius Caesar</a></td>
                                    <td>William Shakespeare</td>
                                    <td>politics</td>
                                    <td>288</td>
                                    <td>$5.99</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">21</td>
                                    <td><a href="src/">King Lear</a></td>
                                    <td>William Shakespeare</td>
                                    <td>tragedy</td>
                                    <td>384</td>
                                    <td>$5.99</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href="src/"><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href="src/"><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href="src/"><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href="src/"><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="src/arrow-stop-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180.gif" alt="first"/>
                                <img class="prev" src="src/arrow-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="src/arrow.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow.gif" alt="next"/>
                                <img class="last" src="src/arrow-stop.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop.gif" alt="last"/> 
                                <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                </div>
                            </form>
                        </div>
                        <div class="table-apply">
                            <form action="">
                            <div>
                            <span>Apply action to selected:</span> 
                            <select class="input-medium">
                                <option value="1" selected="selected">Select action</option>
                                <option value="2">Publish</option>
                                <option value="3">Unpublish</option>
                                <option value="4">Delete</option>
                            </select>
                            </div>
                            </form>
                        </div>
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                
                
                     <div class="pagination">           
                		<a href="src/" class="button"><span><img src="src/arrow-stop-180-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180-small.gif" height="9" width="12" alt="First" /> First</span></a> 
                        <a href="src/" class="button"><span><img src="src/arrow-180-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180-small.gif" height="9" width="12" alt="Previous" /> Prev</span></a>
                        <div class="numbers">
                            <span>Page:</span> 
                            <a href="src/">1</a> 
                            <span>|</span> 
                            <a href="src/">2</a> 
                            <span>|</span> 
                            <span class="current">3</span> 
                            <span>|</span> 
                            <a href="src/">4</a> 
                            <span>|</span> 
                            <a href="src/">5</a> 
                            <span>|</span> 
                            <a href="src/">6</a> 
                            <span>|</span> 
                            <a href="src/">7</a> 
                            <span>|</span> 
                            <span>...</span> 
                            <span>|</span> 
                            <a href="src/">99</a>
                        </div> 
                        <a href="src/" class="button"><span>Next <img src="src/arrow-000-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-000-small.gif" height="9" width="12" alt="Next" /></span></a> 
                        <a href="src/" class="button last"><span>Last <img src="src/arrow-stop-000-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-000-small.gif" height="9" width="12" alt="Last" /></span></a>
                        <div style="clear: both;"></div> 
                     </div>
                
                

                
			</div> <!-- End .grid_12 -->
                
            <!-- Categories list -->
            <div class="grid_6">
                
                <div class="module">
                     <h2><span>Etiquetas</span></h2>
                        
                     <div class="module-body">
                         <a href="src/">images </a>[<a href="#" class="removable">Eliminar</a>]<br />
                         <a href="src/" class="removable">video</a><br />
                         <a href="src/" class="removable">audio</a><br />
                         <a href="src/" class="removable">documents</a><br />
                         <a href="src/" class="removable">apps</a><br />
                         <a href="src/" class="removable">others</a>
                         
                         <form action="">
                            <fieldset>
                                <input type="text" class="input-medium" />&nbsp;&nbsp;<input class="submit-green" type="submit" value="Add category" />
                            </fieldset>
                         </form>
                     </div>
                </div> <!-- module -->
                <div style="clear:both;"></div>
			</div> <!-- End .grid_6 -->
            
            <!-- To-do list -->
            <div class="grid_6">
            
                <div class="module">
                     <h2><span>To-do list</span></h2>
                        
                     <div class="module-body">
                         <a href="src/" class="checkable">check articles for spelling</a><br />
                         <a href="src/" class="checkable">remove old articles</a><br />
                         <a href="src/" class="checkable">switch to a bigger plan</a><br />
                         <a href="src/" class="removable completed">write an article</a><br />
                         <a href="src/" class="removable completed">do maintanance stuff</a><br />

                         
                         <form action="">
                            <fieldset>
                                <input type="text" class="input-medium" />&nbsp;&nbsp;<input class="submit-green" type="submit" value="Add item" />
                            </fieldset>
                         </form>
                     </div>
                </div> <!-- module -->
                <div style="clear:both;"></div>
            
            </div> <!-- End .grid_6 -->
            <div style="clear:both;"></div>
            

                

            
            <div style="clear:both;"></div>
        </div> <!-- End .container_12 -->
		
           
        <!-- Footer -->
        <?
        include 'comunes/footer.php';
        ?>
        <!-- End #footer -->
	</body>
</html>