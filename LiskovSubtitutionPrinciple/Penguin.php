<?
class Penguin extends Bird {
    public function fly() {
        // Penguins can't fly, so override the method
        return "Sorry, I can't fly.";
    }
}