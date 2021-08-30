# The CS:GO World Enums

The CS:GO World Enums for PHP

## Table of contents

1. [Installation](#installation)
2. [Enum Faker Service Provider](#enum-faker-service-provider)
3. [Available Faker Methods](#available-faker-methods)

## Installation

Install the package with composer:

```
composer require thecsgoworld/enums
```

## Enum Faker Service Provider

- Add `\TheCSGOWorld\Providers\TheCSGOWorldEnumFakerProvider::class` to your `providers` in `config/app.php`.
- Use the faker with the new enum fakers

## Available Faker Methods

- `\TheCSGOWorld\Enums\Item\ItemCategory` - itemCategory
- `\TheCSGOWorld\Enums\Item\ItemExterior` - itemExterior
- `\TheCSGOWorld\Enums\Item\ItemQuality` - itemQuality
- `\TheCSGOWorld\Enums\Item\ItemType` - itemType
- `\TheCSGOWorld\Enums\Jackpot\JackpotType` - jackpotType
- `\TheCSGOWorld\Enums\CaseBattle\CaseBattleStatus` - caseBattleStatus
- `\TheCSGOWorld\Enums\CaseBattle\CaseBattleType` - caseBattleType
- `\TheCSGOWorld\Enums\CoinFlip\CoinFlipType` - coinFlipType