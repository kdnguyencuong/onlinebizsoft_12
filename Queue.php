<?php 
	class Queue extends SplQueue{

	}

	$myBooks = new Queue();

	// add some items to the queue
	$myBooks->enqueue('A Game of Thrones');
	$myBooks->enqueue('A Clash of Kings');
	$myBooks->enqueue('A Storm of Swords');

	$myBooks[] = 'A Feast of Crows';
	$myBooks[] = 'A Dance with Dragons';

	foreach ($myBooks as $key => $book) {
	    echo 'Key :'.$key.' Value :'.$book . "<br>"; // prints last item first!
	}

	echo $myBooks->dequeue() . "<br>"; // outputs 'A Game of Thrones'
	echo $myBooks->dequeue() . "<br>"; // outputs 'A Clash of Kings'

	echo '<br>';

	//trỏ đến point giờ bottom là point
	echo $myBooks->bottom();

	//top là thằng đợi cuối
	echo $myBooks->top();
?>