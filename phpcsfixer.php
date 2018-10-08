<?php declare(strict_types = 1);
/**
 *  Copyright (C) DataMonster Ltd, - All Rights Reserved
 *
 *  Unauthorized copying of this file, via any medium is strictly prohibited
 *  Proprietary and confidential
 *
 *  For full license including those of external projects used within this software , please refer to License.txt file
 *  at the root folder of the project.
 *
 *  @author     `Jad Haboush` <j.haboush@realtrade.co.uk>
 *
 *  Reviewed by: `Muhammad Ismail` <muhammad.ismail@datamonsterpk.com>
 *  Reviewed by: `Salman Akram` <salman.akram@datamonsterpk.com>
 *
 *  File:          phpcsfixer.php
 *  Last Modified: 15/02/2018 15:56
 */

use PhpCsFixer\Config;
use Symfony\Component\Finder\Finder;

$dir = \dirname(__DIR__);
/**
 * @var mixed[][] holder of DataMonster custom rules
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 */
$rules = [

    '@PSR2' => true,

    'align_multiline_comment' => [
        'comment_type' => 'phpdocs_only'
    ],

    'array_syntax' => [
        'syntax' => 'short'
    ],

    'binary_operator_spaces' => [
        'default' => 'single_space'
    ],

    'blank_line_after_namespace' => true,

    'blank_line_after_opening_tag' => false,

    'blank_line_before_statement' => [
        'statements' => [
            'break', 'continue', 'return', 'throw', 'try'
        ]
    ],

    'braces' => [
        'allow_single_line_closure' => true,
        'position_after_anonymous_constructs' => 'same',
        'position_after_control_structures' => 'same',
        'position_after_functions_and_oop_constructs' => 'next'
    ],

    'cast_spaces' => [
        'space' => 'single'
    ],

    'class_attributes_separation' => [
        'elements' => [
            'const', 'method', 'property'
        ]
    ],

    'class_definition' => [
        'multiLineExtendsEachSingleLine' => false,
        'singleItemSingleLine' => false,
        'singleLine' => false
    ],

    'class_keyword_remove' => false,

    'combine_consecutive_issets' => true,

    'combine_consecutive_unsets' => true,

    'compact_nullable_typehint' => false,

    'concat_space' => [
        'spacing' => 'one'
    ],

    'declare_equal_normalize' => [
        'space' => 'single'
    ],

    'declare_strict_types' => true,

    'dir_constant' => true,

    'elseif' => true,

    'encoding' => true,

    'ereg_to_preg' => true,

    'escape_implicit_backslashes' => [
        'double_quoted' => true,
        'heredoc_syntax' => true,
        'single_quoted' => false
    ],

    'explicit_indirect_variable' => true,

    'explicit_string_variable' => true,

    'full_opening_tag' => true,

    'function_declaration' => [
        'closure_function_spacing' => 'one'
    ],

    'function_to_constant' => true,

    'function_typehint_space' => true,

    'general_phpdoc_annotation_remove' => [],

    'hash_to_slash_comment' => true,

    'heredoc_to_nowdoc' => true,

    'include' => true,

    'indentation_type' => true,

    'is_null' => [
        'use_yoda_style' => true
    ],

    'line_ending' => true,

    'linebreak_after_opening_tag' => false, /** We use `<?php declare(strict_types = 1);` */

    'list_syntax' => [
        'syntax' => 'short'
    ],

    'lowercase_cast' => true,

    'lowercase_constants' => true,

    'lowercase_keywords' => true,

    'magic_constant_casing' => true,

    'mb_str_functions' => true,

    'method_argument_space' => [
        'ensure_fully_multiline' => true,
        'keep_multiple_spaces_after_comma' => true
    ],

    'modernize_types_casting' => true,

    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line'
    ],

    'native_function_casing' => true,

    'native_function_invocation' => [
        'exclude' => []
    ],

    'new_with_braces' => false,

    'no_alias_functions' => true,

    'no_blank_lines_after_class_opening' => true,

    'no_blank_lines_after_phpdoc' => true,

    'no_blank_lines_before_namespace' => false,

    'no_break_comment' => [
        'comment_text' => 'Intentional fall through'
    ],

    'no_closing_tag' => true,

    'no_empty_comment' => true,

    'no_empty_phpdoc' => true,

    'no_empty_statement' => true,

    'no_extra_blank_lines' => [
        'tokens' => ['extra']
    ],

    'no_leading_import_slash' => true,

    'no_leading_namespace_whitespace' => true,

    'no_mixed_echo_print' => [
        'use' => 'echo'
    ],

    'no_multiline_whitespace_around_double_arrow' => true,

    'no_null_property_initialization' => true,

    'no_php4_constructor' => true,

    'no_short_bool_cast' => true,

    'no_short_echo_tag' => true,

    'no_singleline_whitespace_before_semicolons' => true,

    'no_spaces_after_function_name' => true,

    'no_spaces_around_offset' => [
        'positions' => [
            'inside', 'outside'
        ]
    ],

    'no_spaces_inside_parenthesis' => true,

    'no_superfluous_elseif' => true,

    'no_trailing_comma_in_list_call' => true,

    'no_trailing_comma_in_singleline_array' => true,

    'no_trailing_whitespace' => true,

    'no_trailing_whitespace_in_comment' => true,

    'no_unneeded_control_parentheses' => [
        'statements' => [
            'break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'
        ]
    ],

    'no_unneeded_curly_braces' => true,

    'no_unneeded_final_method' => true,

    'no_unused_imports' => true,

    'no_useless_else' => true,

    'no_useless_return' => true,

    'no_whitespace_before_comma_in_array' => true,

    'no_whitespace_in_blank_line' => true,

    'normalize_index_brace' => true,

    'not_operator_with_space' => true,

    'object_operator_without_whitespace' => true,

    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public',
            'property_protected',
            'property_private',
            'construct',
            'destruct',
            'magic',
            'phpunit',
            'method_public',
            'method_protected',
            'method_private'
        ]
    ],

    'ordered_imports' => [
        'importsOrder' => null,
        'sortAlgorithm' => 'alpha'
    ],

    'php_unit_construct' => [
        'assertions' => [
            'assertSame', 'assertNotEquals', 'assertNotSame'
        ]
    ],

    'php_unit_dedicate_assert' => [
        'target' => 'newest'
    ],

    'php_unit_expectation' => [
        'target' => 'newest'
    ],

    'php_unit_fqcn_annotation' => true,

    'php_unit_mock' => true,

    'php_unit_namespaced' => true,

    'php_unit_strict' => [
        'assertions' => [
            'assertAttributeEquals', 'assertAttributeNotEquals', 'assertNotEquals'
        ]
    ],

    'php_unit_test_annotation' => [
        'style' => 'annotation'
    ],

    'php_unit_test_class_requires_covers' => true,

    'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => false
    ],

    'phpdoc_align' => [
        'tags' => [
            'param', 'return', 'throws', 'type', 'var'
        ]
    ],

    'phpdoc_annotation_without_dot' => true,

    'phpdoc_indent' => true,

    'phpdoc_inline_tag' => true,

    'phpdoc_no_access' => true,

    'phpdoc_no_empty_return' => false,

    'phpdoc_no_package' => false,

    'phpdoc_no_useless_inheritdoc' => true,

    'phpdoc_order' => true,

    'phpdoc_scalar' => true,

    'phpdoc_separation' => true,

    'phpdoc_single_line_var_spacing' => true,

    'phpdoc_to_comment' => false,

    'phpdoc_trim' => true,

    'phpdoc_types' => true,

    'phpdoc_var_without_name' => false,

    'pow_to_exponentiation' => true,

    'protected_to_private' => true,

    'psr4' => true,

    'random_api_migration' => [
        'replacements' => [
            'getrandmax' => 'mt_getrandmax',
            'rand' => 'mt_rand',
            'srand' => 'mt_srand'
        ]
    ],

    'return_type_declaration' => [
        'space_before' => 'none' // TODO.
    ],

    'semicolon_after_instruction' => true,

    'short_scalar_cast' => true,

    'simplified_null_return' => true,

    'single_blank_line_at_eof' => true,

    'single_blank_line_before_namespace' => true,

    'single_class_element_per_statement' => [
        'elements' => [
            'const', 'property'
        ]
    ],

    'single_import_per_statement' => false,

    'single_line_after_imports' => true,

    'single_line_comment_style' => [
        'comment_types' => [
            'hash', 'asterisk'
        ]
    ],

    'single_quote' => true,

    'space_after_semicolon' => [
        'remove_in_empty_for_expressions' => false
    ],

    'standardize_not_equals' => true,

    'strict_comparison' => true,

    'strict_param' => true,

    'switch_case_semicolon_to_colon' => true,

    'switch_case_space' => true,

    'ternary_operator_spaces' => true,

    'ternary_to_null_coalescing' => true,

    'trailing_comma_in_multiline_array' => false,

    'trim_array_spaces' => false,

    'unary_operator_spaces' => true,

    'visibility_required' => [
        'elements' => [
            'const', 'property', 'method'
        ]
    ],

    'void_return' => false,

    'whitespace_after_comma_in_array' => true,

    'yoda_style' => true
];

$finder = (new Finder)
    ->in($dir)
    ->files()
    ->depth('> 0')
    ->ignoreDotFiles(true)
    ->ignoreUnreadableDirs()
    ->ignoreVCS(true)
    ->exclude(['vendor', 'build'])
    ->name('*.php')
    ->sort(function (\SplFileInfo $fileA, \SplFileInfo $fileB) {
        return $fileB->getMTime() - $fileA->getMTime();
    })
    ->filter(function (\SplFileInfo $info) {
        syslog(LOG_DEBUG, (string) $info);
        if (! $info->isFile() || ! $info->isReadable()) {
            return false;
        }
        $object = new \SplFileObject($info->getRealPath(), 'rb');
        $data = $object->fread(256);

        return false === $data
            ? false
            : false !== mb_stripos($data, 'Copyright (C) DataMonster ltd', 0, 'UTF-8');
    });

return (new Config('DataMonster'))
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setFormat('txt')
    ->setRules($rules)
    ->setIndent('    ')
    ->setLineEnding("\n")
    ->setHideProgress(false);
