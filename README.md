# Open Legends Core

Project under development!

## Install

`composer require openlegends/core:dev-main`

## Test features

### Cards

`composer require openlegends/asset:dev-main`

```
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$mouse = new \OpenLegends\Asset\Test\Card\Mouse();
$rat = new \OpenLegends\Asset\Test\Card\Rat();

$damage = new \OpenLegends\Asset\Test\Card\Action\Damage(
    $mouse
);

$damage->card(
    $rat
);

var_dump(
    $mouse->getHealth()
);

var_dump(
    $rat->getHealth()
);
```

### Pool

Useful for decks, hand, discard pile, etc

`composer require openlegends/asset:dev-main`

```
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$deck = new \OpenLegends\Asset\Test\Pool\Card();

$deck->addCard(
    new \OpenLegends\Asset\Test\Card\Goblin()
);

$deck->addCard(
    new \OpenLegends\Asset\Test\Card\Mouse()
);

$deck->addCard(
    new \OpenLegends\Asset\Test\Card\Rat()
);

var_dump(
    $deck->getRandomCard()->getName()
);
```