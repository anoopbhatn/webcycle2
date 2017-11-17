#!"C:\wamp\bin\perl\perl\bin\perl.exe"

# Write a Perl program to keep track of the number of visitors visiting the web page and to
# display this count of visitors, with proper headings. (use file handling)
use strict;
use CGI':standard';

my $count;

open (FILE, "<visit.txt");
$count=<FILE>;
close(FILE);
open(FILE, ">visit.txt");
$count++;
print FILE "$count";
close(FILE);

print header;
print start_html(
    -head => [
      Link( { -href => 'styles.css', -rel => 'stylesheet', -type => 'text/css'}),
    ]);
print "<div class=\"container\">
        <div class=\"box-cont\">
            <div class=\"box-header\">
                VISITOR COUNT
            </div>
            <div class=\"box\">";
print "<center><h1>You are the visitor number $count";
print "</div>
         </div>
        </div>";
print end_html( );




