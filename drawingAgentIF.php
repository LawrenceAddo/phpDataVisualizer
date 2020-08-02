<?php

require_once 'color.php';
require_once 'font.php';

// constants for alignment
define('LEFT', 0);
define('RIGHT', 1);
define('CENTER', 2);
define('TOP', 3);
define('BOTTOM', 4);

interface drawingAgentIF{
    public function finish(); //finishes graph-drawing and returns product

    public function drawLine(float $x1, float $y1, float $x2, float $y2, float $width, color $color, bool $dashed = false): void; // drawing a straight line from point to point
    public function drawRectangle(float $x1, float $y1, float $x2, float $y2, color $color, bool $filled = true): void; // drawing a rectangle
    public function drawText(float $x, float $y, string $text, font $font, float $size, color $color, int $xAlign = LEFT, int $yAlign = BOTTOM, float $angle = 0): void; // draw text at the given position the anchor is specified with xAlign and yAlign
    public function drawArc(float $x, float $y, float $radius, float $start, float $end, color $color, bool $filled = true): void;
    public function drawPolyLine(array $points, float $width, color $color): void; // draws lines between the specified points
    public function drawPolygon(array $points, color $color, bool $filled = true): void; // draws a polygon by connecting the given points
}
?>