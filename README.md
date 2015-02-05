# Statamic-calculator
A plugin to perform calculations on variables

## Installation

Place `pi.calculator.php` in `_add-ons\calculator\`.

## Usage

Inside your pages, use the plugin to do things like:

```
{{ calculator equation="(2 + 4) * 2.3" }}

=>13.8
```

```
{{ calculator equation="6 / 2.3" }}

=> 2.6086956521739 
```

You can use `precision`:

```
{{ calculator equation="6 / 2.3" precision="2" }}

=> 2.61
```

Or, use variables:

```
{{ calculator equation="{index} * 2" }}

=> 2,4,6...
```
