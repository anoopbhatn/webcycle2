#!"C:\wamp\bin\perl\perl\bin\perl.exe"

# Write a Perl program to display a digital clock which displays the current time of the server.
use strict;
use CGI':standard';
my $ampm;
my($sec,$min,$hour)=localtime();
print header;
print start_html(
    -head => [
      Link( { -href => 'styles.css', -rel => 'stylesheet', -type => 'text/css'}),
    ]);
print "<META HTTP-EQUIV='Refresh' CONTENT='1'>";
print "<div class=\"container\">
        <div class=\"box-cont\">
            <div class=\"box-header\">
                THE DIGITAL CLOCK
            </div>
            <div class=\"box\">";
if($hour>12)
{
    $hour=$hour-12;
    $ampm="PM";
}
else
{
    $ampm="AM";
}
print h2("The current time is $hour:$min:$sec:$ampm");
print "</div>
         </div>
        </div>";
print end_html( );
