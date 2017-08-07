<?
require 'scraperwiki.php';
echo "Scraper running...\n";
// Write out to the sqlite database using scraperwiki library
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
for ($i=1; $i<=5; $i++) {
  echo "$i...\n";
  sleep(1);
}
?>
