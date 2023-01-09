<?php $myName = "Toufik";?>
<h1><?php bloginfo('name'); ?></h1> 
<h2><?php bloginfo('description'); ?></h2> 

<p>Hi, my name is <?php echo $myName; ?></p>
<?php
$names = array('Toufik', 'Samy', 'Ghania', 'Iness');
$count = 0;

while($count < count($names)){
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
}
