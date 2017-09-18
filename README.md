# php_challenge_test

Write some code that will solve the following:
We want to add up the total time a given object was in a RUNNING state; lets ignore what the
object is, or what the states mean, irrelevant to this challenge. The changes to the objects
state are recorded in an array, that would be structured as follows:

  array(
      array(
      'oldState' => STATE,
      'newState' => STATE,
      'date' => UNIX_TIMESTAMP
      ),
      array(
      'oldState' => STATE,
      'newState' => STATE,
      'date' => UNIX_TIMESTAMP
      )
  );
  
There are three possible states. PAUSED, RUNNING, and COMPLETE. The array records the
unix timestamp (seconds since epoch) of when the object went into the 'newState', leaving
'oldState'. So we want a total sum of the time it spent in a RUNNING state. There may be
several state changes, or thousands. They are not necessarily in order. An object may have
never entered into a RUNNING state. A COMPLETE state can be treated just as PAUSED, i.e.
the object is NOT running. No guarantees that once an object enters into a COMPLETE state,
that it won't then go back into RUNNING!.

The method should take the array of states, an optional start, and an optional stop as
parameters, returning the number of seconds within RUNNING state. Use constants for the
three states so they can easily be changed to match our tests.
