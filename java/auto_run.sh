#!/bin/bash

javac Mac_Address_Local.java # compile the program

while true
do
echo >> log
java Mac_Address_Local >> log
echo >> log
echo "Connected: $i times." >> log
echo "Date: $(date)" >> log
echo >> log
echo >> log
sleep 10
done

#http://stackoverflow.com/questions/13003339/how-do-i-write-a-shell-script-that-repeats-a-java-program-a-specific-number-of-t
