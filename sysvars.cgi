#!/bin/bash

#created by ravneet kaur, feb 1 2017

#variables storing system information

os=$(uname -o);
architecture=$(uname -m);
kernelrelease=$(uname -r);
intrnlip=$(hostname -I);
externalip=$(curl -s ipecho.net/plain;echo);
loadaverage=$(top -n 1 -b | grep "load average:" | awk '{print $12}') ;
serversftwr=$SERVER_SOFTWARE;

array=()
while IFS=  read -r -d $'\0'; do
    array+=("$REPLY")
done < <(find . -name "*sh.cgi" -print0)

