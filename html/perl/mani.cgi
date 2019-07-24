#!C:\xampp\perl\bin\perl.exe
use strict;
use warnings;

use CGI qw(:standard);
use CGI::Carp qw(fatalsToBrowser);
print "Content-type: text/html\n\n";

my $uname=param("uname");
my $pass=param("pass");

if($uname eq $pass)
	{
		print "<h2>Welcome $uname</h2>";
	}
else
	{
		print "<h2>Username and Password Mismatch</h2>";
	}