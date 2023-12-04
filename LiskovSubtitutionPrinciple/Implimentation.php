<?
use Bird;
use Penguin;

function makeBirdFly(Bird $bird) {
    return $bird->fly();
}

$eagle = new Bird();
$penguin = new Penguin();

echo makeBirdFly($eagle);   // Output: Flying...
echo makeBirdFly($penguin); // Output: Sorry, I can't fly.