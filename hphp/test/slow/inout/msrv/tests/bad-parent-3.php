<?hh // @generated by make_suite.sh

class P {
  function foo(&$x) {}
}

class C extends P {
  function foo(inout $x) {}
}
