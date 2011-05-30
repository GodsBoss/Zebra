Zebra striping
==============

Mini-project for Zebra striping.

Usage
-----

### The common case: even & odd

    $z = new Zebra();
    print $z; // Will print 'odd'.
    print $z; // Will print 'even'.
    print $z; // Will print 'odd'.

### Custom values

    $z = new Zebra(array('one', 'two', 'three'));
    print $z; // Will print 'one'.
    print $z; // Will print 'two'.
    print $z; // Will print 'three'.
    print $z; // Will print 'one'.

### Several value sets at once.

    $z = new Zebra(array('odd', 'even'), array('1', '2', '3'));
    print $z; // Will print 'odd 1'.
    print $z; // Will print 'even 2'.
    print $z; // Will print 'odd 3'.
    print $z; // Will print 'even 1'.
