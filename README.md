Zebra striping
==============

Mini-project for Zebra striping. Licensed under GPL.

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

### Use the same value in the same set several times.

    $z = new Zebra(array('foo', 'bar', 'foo', 'baz'));
    print $z; // Will print 'foo'.
    print $z; // Will print 'bar'.
    print $z; // Will print 'foo'.
    print $z; // Will print 'baz'.
    print $z; // Will print 'foo'.
