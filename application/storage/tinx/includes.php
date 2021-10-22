<?php

use Ajthinking\Tinx\Console\State;

/**
 * Restarts Tinker.
 *
 * @return  void
 * */
function re() {
    State::requestRestart();
    exit();
}

/**
 * Restart aliases.
 * */
function reboot() {
    re();
}
function reload() {
    re();
}
function restart() {
    re();
}

/**
 * Renders the "Class/Shortcuts" names table.
 *
 * @param  array $args If passed, filters classes to these terms (e.g. "names('banana', 'carrot')").
 * @return  void
 * */
function names(...$args) {
    event('tinx.names', $args);
}

/**
 * @param  string $class
 * @return  void
 * */
function tinx_forget_name($class) {
    array_forget($GLOBALS, "tinx.names.$class");
}

/**
 * Magic query method to handle all "u(x [y, z])" calls.
 *
 * @param  string $class
 * @param  mixed $args
 * @return  mixed
 * */
function tinx_query($class, ...$args)
{
    $totalArgs = count($args);

    /**
     * Zero arguments (i.e. u() returns "App\User").
     * */
    if ($totalArgs === 0) {
        return $class; /* Return a clean starting point for the query builder. */
    }

    /**
     * One argument (i.e. u(2) returns App\User::find(2)).
     * */
    if ($totalArgs === 1) {
        $arg = $args[0];

        /**
         * Int? Use "find()".
         * */
        if (is_int($arg)) {
            return $class::find($arg);
        }

        /**
         * String? Search all columns.
         * */
        if (is_string($arg)) {
            if ($class::first() === null) {
                throw new Exception(
                    "You can only search where there is data. ".
                    "There is no way for Tinx to get a column listing ".
                    "for a model without an existing instance…");
            }
            $columns = Schema::getColumnListing($class::first()->getTable());
            $query = $class::select('*');
            foreach ($columns as $column) {
                $query->orWhere($column, 'like', '%'.$arg.'%');
            }
            return $query->get();
        }

        throw new Exception("Don't know what to do with this datatype. Please make PR.");
    }

    /**
     * The query builder's "where" method accepts up to 4 arguments, but let's lock it to 3.
     * Two arguments (i.e. u("name", "Anders") returns App\User::where("name", "Anders")).
     * Three arguments (i.e. u("id", ">", 1) returns App\User::where("id", ">", 1)).
     * */
    if ($totalArgs >= 2 && $totalArgs <= 3) {
        return $class::where(...$args)->get();
    }
    
    throw new Exception("Too many arguments!");
}

/**
 * Insert "first" and "last" variables (e.g. '$u', '$u_', etc) and model functions (e.g. 'u()', etc).
 * For "first" variable, returns "::first()" if class DB table exists, otherwise "new" (if 'tableless_models' set to true).
 * For "last" variable, returns "::latest()->first()" if class DB table exists, otherwise "new" (if 'tableless_models' set to true).
 * */
array_set($GLOBALS, 'tinx.names', array (
  'App\\Models\\Assigned' => 'a',
  'App\\Models\\Lineitem' => 'li',
  'App\\Models\\Unit' => 'u',
  'App\\Models\\Timer' => 'tim',
  'App\\Models\\Ticket' => 'ti',
  'App\\Models\\TaskAssigned' => 'taa',
  'App\\Models\\Task' => 'ta',
  'App\\Models\\Tag' => 't',
  'App\\Models\\Settings' => 's',
  'App\\Models\\Role' => 'r',
  'App\\Models\\ProjectAssigned' => 'pa',
  'App\\Models\\Project' => 'pro',
  'App\\Models\\Predefined' => 'pr',
  'App\\Models\\Payment' => 'p',
  'App\\Models\\Note' => 'n',
  'App\\Models\\Milestone' => 'm',
  'App\\Models\\LeadStatus' => 'lst',
  'App\\Models\\Attachment' => 'at',
  'App\\Models\\LeadSources' => 'ls',
  'App\\Models\\LeadAssigned' => 'la',
  'App\\Models\\Lead' => 'l',
  'App\\Models\\Item' => 'it',
  'App\\Models\\Invoice' => 'i',
  'App\\Models\\File' => 'f',
  'App\\Models\\Expense' => 'ex',
  'App\\Models\\Event' => 'ev',
  'App\\Models\\Estimate' => 'es',
  'App\\Models\\ContractTemplate' => 'ct',
  'App\\Models\\Contract' => 'con',
  'App\\Models\\Comment' => 'co',
  'App\\Models\\Client' => 'cl',
  'App\\Models\\Category' => 'c',
  'App\\Models\\User' => 'us',
));
$latestColumn = 'created_at';
    try {
        $a = App\Models\Assigned::first() ?: app('App\Models\Assigned');
        $a_ = App\Models\Assigned::latest($latestColumn)->first() ?: app('App\Models\Assigned');
        if (!function_exists('a')) {
            function a(...$args) {
                return tinx_query('App\Models\Assigned', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Assigned');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Assigned');
    }
    try {
        $li = App\Models\Lineitem::first() ?: app('App\Models\Lineitem');
        $li_ = App\Models\Lineitem::latest($latestColumn)->first() ?: app('App\Models\Lineitem');
        if (!function_exists('li')) {
            function li(...$args) {
                return tinx_query('App\Models\Lineitem', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Lineitem');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Lineitem');
    }
    try {
        $u = App\Models\Unit::first() ?: app('App\Models\Unit');
        $u_ = App\Models\Unit::latest($latestColumn)->first() ?: app('App\Models\Unit');
        if (!function_exists('u')) {
            function u(...$args) {
                return tinx_query('App\Models\Unit', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Unit');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Unit');
    }
    try {
        $tim = App\Models\Timer::first() ?: app('App\Models\Timer');
        $tim_ = App\Models\Timer::latest($latestColumn)->first() ?: app('App\Models\Timer');
        if (!function_exists('tim')) {
            function tim(...$args) {
                return tinx_query('App\Models\Timer', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Timer');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Timer');
    }
    try {
        $ti = App\Models\Ticket::first() ?: app('App\Models\Ticket');
        $ti_ = App\Models\Ticket::latest($latestColumn)->first() ?: app('App\Models\Ticket');
        if (!function_exists('ti')) {
            function ti(...$args) {
                return tinx_query('App\Models\Ticket', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Ticket');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Ticket');
    }
    try {
        $taa = App\Models\TaskAssigned::first() ?: app('App\Models\TaskAssigned');
        $taa_ = App\Models\TaskAssigned::latest($latestColumn)->first() ?: app('App\Models\TaskAssigned');
        if (!function_exists('taa')) {
            function taa(...$args) {
                return tinx_query('App\Models\TaskAssigned', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\TaskAssigned');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\TaskAssigned');
    }
    try {
        $ta = App\Models\Task::first() ?: app('App\Models\Task');
        $ta_ = App\Models\Task::latest($latestColumn)->first() ?: app('App\Models\Task');
        if (!function_exists('ta')) {
            function ta(...$args) {
                return tinx_query('App\Models\Task', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Task');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Task');
    }
    try {
        $t = App\Models\Tag::first() ?: app('App\Models\Tag');
        $t_ = App\Models\Tag::latest($latestColumn)->first() ?: app('App\Models\Tag');
        if (!function_exists('t')) {
            function t(...$args) {
                return tinx_query('App\Models\Tag', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Tag');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Tag');
    }
    try {
        $s = App\Models\Settings::first() ?: app('App\Models\Settings');
        $s_ = App\Models\Settings::latest($latestColumn)->first() ?: app('App\Models\Settings');
        if (!function_exists('s')) {
            function s(...$args) {
                return tinx_query('App\Models\Settings', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Settings');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Settings');
    }
    try {
        $r = App\Models\Role::first() ?: app('App\Models\Role');
        $r_ = App\Models\Role::latest($latestColumn)->first() ?: app('App\Models\Role');
        if (!function_exists('r')) {
            function r(...$args) {
                return tinx_query('App\Models\Role', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Role');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Role');
    }
    try {
        $pa = App\Models\ProjectAssigned::first() ?: app('App\Models\ProjectAssigned');
        $pa_ = App\Models\ProjectAssigned::latest($latestColumn)->first() ?: app('App\Models\ProjectAssigned');
        if (!function_exists('pa')) {
            function pa(...$args) {
                return tinx_query('App\Models\ProjectAssigned', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\ProjectAssigned');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\ProjectAssigned');
    }
    try {
        $pro = App\Models\Project::first() ?: app('App\Models\Project');
        $pro_ = App\Models\Project::latest($latestColumn)->first() ?: app('App\Models\Project');
        if (!function_exists('pro')) {
            function pro(...$args) {
                return tinx_query('App\Models\Project', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Project');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Project');
    }
    try {
        $pr = App\Models\Predefined::first() ?: app('App\Models\Predefined');
        $pr_ = App\Models\Predefined::latest($latestColumn)->first() ?: app('App\Models\Predefined');
        if (!function_exists('pr')) {
            function pr(...$args) {
                return tinx_query('App\Models\Predefined', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Predefined');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Predefined');
    }
    try {
        $p = App\Models\Payment::first() ?: app('App\Models\Payment');
        $p_ = App\Models\Payment::latest($latestColumn)->first() ?: app('App\Models\Payment');
        if (!function_exists('p')) {
            function p(...$args) {
                return tinx_query('App\Models\Payment', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Payment');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Payment');
    }
    try {
        $n = App\Models\Note::first() ?: app('App\Models\Note');
        $n_ = App\Models\Note::latest($latestColumn)->first() ?: app('App\Models\Note');
        if (!function_exists('n')) {
            function n(...$args) {
                return tinx_query('App\Models\Note', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Note');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Note');
    }
    try {
        $m = App\Models\Milestone::first() ?: app('App\Models\Milestone');
        $m_ = App\Models\Milestone::latest($latestColumn)->first() ?: app('App\Models\Milestone');
        if (!function_exists('m')) {
            function m(...$args) {
                return tinx_query('App\Models\Milestone', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Milestone');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Milestone');
    }
    try {
        $lst = App\Models\LeadStatus::first() ?: app('App\Models\LeadStatus');
        $lst_ = App\Models\LeadStatus::latest($latestColumn)->first() ?: app('App\Models\LeadStatus');
        if (!function_exists('lst')) {
            function lst(...$args) {
                return tinx_query('App\Models\LeadStatus', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\LeadStatus');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\LeadStatus');
    }
    try {
        $at = App\Models\Attachment::first() ?: app('App\Models\Attachment');
        $at_ = App\Models\Attachment::latest($latestColumn)->first() ?: app('App\Models\Attachment');
        if (!function_exists('at')) {
            function at(...$args) {
                return tinx_query('App\Models\Attachment', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Attachment');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Attachment');
    }
    try {
        $ls = App\Models\LeadSources::first() ?: app('App\Models\LeadSources');
        $ls_ = App\Models\LeadSources::latest($latestColumn)->first() ?: app('App\Models\LeadSources');
        if (!function_exists('ls')) {
            function ls(...$args) {
                return tinx_query('App\Models\LeadSources', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\LeadSources');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\LeadSources');
    }
    try {
        $la = App\Models\LeadAssigned::first() ?: app('App\Models\LeadAssigned');
        $la_ = App\Models\LeadAssigned::latest($latestColumn)->first() ?: app('App\Models\LeadAssigned');
        if (!function_exists('la')) {
            function la(...$args) {
                return tinx_query('App\Models\LeadAssigned', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\LeadAssigned');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\LeadAssigned');
    }
    try {
        $l = App\Models\Lead::first() ?: app('App\Models\Lead');
        $l_ = App\Models\Lead::latest($latestColumn)->first() ?: app('App\Models\Lead');
        if (!function_exists('l')) {
            function l(...$args) {
                return tinx_query('App\Models\Lead', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Lead');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Lead');
    }
    try {
        $it = App\Models\Item::first() ?: app('App\Models\Item');
        $it_ = App\Models\Item::latest($latestColumn)->first() ?: app('App\Models\Item');
        if (!function_exists('it')) {
            function it(...$args) {
                return tinx_query('App\Models\Item', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Item');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Item');
    }
    try {
        $i = App\Models\Invoice::first() ?: app('App\Models\Invoice');
        $i_ = App\Models\Invoice::latest($latestColumn)->first() ?: app('App\Models\Invoice');
        if (!function_exists('i')) {
            function i(...$args) {
                return tinx_query('App\Models\Invoice', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Invoice');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Invoice');
    }
    try {
        $f = App\Models\File::first() ?: app('App\Models\File');
        $f_ = App\Models\File::latest($latestColumn)->first() ?: app('App\Models\File');
        if (!function_exists('f')) {
            function f(...$args) {
                return tinx_query('App\Models\File', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\File');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\File');
    }
    try {
        $ex = App\Models\Expense::first() ?: app('App\Models\Expense');
        $ex_ = App\Models\Expense::latest($latestColumn)->first() ?: app('App\Models\Expense');
        if (!function_exists('ex')) {
            function ex(...$args) {
                return tinx_query('App\Models\Expense', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Expense');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Expense');
    }
    try {
        $ev = App\Models\Event::first() ?: app('App\Models\Event');
        $ev_ = App\Models\Event::latest($latestColumn)->first() ?: app('App\Models\Event');
        if (!function_exists('ev')) {
            function ev(...$args) {
                return tinx_query('App\Models\Event', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Event');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Event');
    }
    try {
        $es = App\Models\Estimate::first() ?: app('App\Models\Estimate');
        $es_ = App\Models\Estimate::latest($latestColumn)->first() ?: app('App\Models\Estimate');
        if (!function_exists('es')) {
            function es(...$args) {
                return tinx_query('App\Models\Estimate', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Estimate');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Estimate');
    }
    try {
        $ct = App\Models\ContractTemplate::first() ?: app('App\Models\ContractTemplate');
        $ct_ = App\Models\ContractTemplate::latest($latestColumn)->first() ?: app('App\Models\ContractTemplate');
        if (!function_exists('ct')) {
            function ct(...$args) {
                return tinx_query('App\Models\ContractTemplate', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\ContractTemplate');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\ContractTemplate');
    }
    try {
        $con = App\Models\Contract::first() ?: app('App\Models\Contract');
        $con_ = App\Models\Contract::latest($latestColumn)->first() ?: app('App\Models\Contract');
        if (!function_exists('con')) {
            function con(...$args) {
                return tinx_query('App\Models\Contract', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Contract');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Contract');
    }
    try {
        $co = App\Models\Comment::first() ?: app('App\Models\Comment');
        $co_ = App\Models\Comment::latest($latestColumn)->first() ?: app('App\Models\Comment');
        if (!function_exists('co')) {
            function co(...$args) {
                return tinx_query('App\Models\Comment', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Comment');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Comment');
    }
    try {
        $cl = App\Models\Client::first() ?: app('App\Models\Client');
        $cl_ = App\Models\Client::latest($latestColumn)->first() ?: app('App\Models\Client');
        if (!function_exists('cl')) {
            function cl(...$args) {
                return tinx_query('App\Models\Client', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Client');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Client');
    }
    try {
        $c = App\Models\Category::first() ?: app('App\Models\Category');
        $c_ = App\Models\Category::latest($latestColumn)->first() ?: app('App\Models\Category');
        if (!function_exists('c')) {
            function c(...$args) {
                return tinx_query('App\Models\Category', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\Category');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\Category');
    }
    try {
        $us = App\Models\User::first() ?: app('App\Models\User');
        $us_ = App\Models\User::latest($latestColumn)->first() ?: app('App\Models\User');
        if (!function_exists('us')) {
            function us(...$args) {
                return tinx_query('App\Models\User', ...$args);
            }
        }
    } catch (Throwable $e) {
        tinx_forget_name('App\Models\User');
    } catch (Exception $e) {
        tinx_forget_name('App\Models\User');
    }
unset($latestColumn);

/**
 * Quick reference array.
 * */
$names = array_get($GLOBALS, 'tinx.names');
