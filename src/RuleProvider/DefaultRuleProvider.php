<?php

/**
 * This file is part of cocur/slugify.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocur\Slugify\RuleProvider;

/**
 * DefaultRuleProvider
 *
 * @package   Cocur\Slugify\RuleProvider
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
class DefaultRuleProvider implements RuleProviderInterface
{
    /**
     * DO NOT MODIFY THESE RULES!
     * These rules are generated by the script in bin/generate-rules.php based on the JSON files
     * in Resources/rules.
     *
     * @var array
     */
    protected $rules = /*INSERT_START*/array (
  'arabic' => 
  array (
    'أ' => 'a',
    'ب' => 'b',
    'ت' => 't',
    'ث' => 'th',
    'ج' => 'g',
    'ح' => 'h',
    'خ' => 'kh',
    'د' => 'd',
    'ذ' => 'th',
    'ر' => 'r',
    'ز' => 'z',
    'س' => 's',
    'ش' => 'sh',
    'ص' => 's',
    'ض' => 'd',
    'ط' => 't',
    'ظ' => 'th',
    'ع' => 'aa',
    'غ' => 'gh',
    'ف' => 'f',
    'ق' => 'k',
    'ك' => 'k',
    'ل' => 'l',
    'م' => 'm',
    'ن' => 'n',
    'ه' => 'h',
    'و' => 'o',
    'ي' => 'y',
  ),
  'austrian' => 
  array (
    'Ä' => 'AE',
    'Ö' => 'OE',
    'Ü' => 'UE',
    'ß' => 'sz',
    'ä' => 'ae',
    'ö' => 'oe',
    'ü' => 'ue',
  ),
  'azerbaijani' => 
  array (
    'Ə' => 'E',
    'Ç' => 'C',
    'Ğ' => 'G',
    'İ' => 'I',
    'Ş' => 'S',
    'Ö' => 'O',
    'Ü' => 'U',
    'ə' => 'e',
    'ç' => 'c',
    'ğ' => 'g',
    'ı' => 'i',
    'ş' => 's',
    'ö' => 'o',
    'ü' => 'u',
  ),
  'bulgarian' => 
  array (
    'А' => 'A',
    'Б' => 'B',
    'В' => 'V',
    'Г' => 'G',
    'Д' => 'D',
    'Е' => 'E',
    'Ж' => 'J',
    'З' => 'Z',
    'И' => 'I',
    'Й' => 'Y',
    'К' => 'K',
    'Л' => 'L',
    'М' => 'M',
    'Н' => 'N',
    'О' => 'O',
    'П' => 'P',
    'Р' => 'R',
    'С' => 'S',
    'Т' => 'T',
    'У' => 'U',
    'Ф' => 'F',
    'Х' => 'H',
    'Ц' => 'Ts',
    'Ч' => 'Ch',
    'Ш' => 'Sh',
    'Щ' => 'Sht',
    'Ъ' => 'A',
    'Ь' => 'I',
    'Ю' => 'Iu',
    'Я' => 'Ia',
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ж' => 'j',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sht',
    'ъ' => 'a',
    'ь' => 'i',
    'ю' => 'iu',
    'я' => 'ia',
    'ия' => 'ia',
    'йо' => 'iо',
    'ьо' => 'io',
  ),
  'burmese' => 
  array (
    'က' => 'k',
    'ခ' => 'kh',
    'ဂ' => 'g',
    'ဃ' => 'ga',
    'င' => 'ng',
    'စ' => 's',
    'ဆ' => 'sa',
    'ဇ' => 'z',
    'စျ' => 'za',
    'ည' => 'ny',
    'ဋ' => 't',
    'ဌ' => 'ta',
    'ဍ' => 'd',
    'ဎ' => 'da',
    'ဏ' => 'na',
    'တ' => 't',
    'ထ' => 'ta',
    'ဒ' => 'd',
    'ဓ' => 'da',
    'န' => 'n',
    'ပ' => 'p',
    'ဖ' => 'pa',
    'ဗ' => 'b',
    'ဘ' => 'ba',
    'မ' => 'm',
    'ယ' => 'y',
    'ရ' => 'ya',
    'လ' => 'l',
    'ဝ' => 'w',
    'သ' => 'th',
    'ဟ' => 'h',
    'ဠ' => 'la',
    'အ' => 'a',
    'ြ' => 'y',
    'ျ' => 'ya',
    'ွ' => 'w',
    'ြွ' => 'yw',
    'ျွ' => 'ywa',
    'ှ' => 'h',
    'ဧ' => 'e',
    '၏' => '-e',
    'ဣ' => 'i',
    'ဤ' => '-i',
    'ဉ' => 'u',
    'ဦ' => '-u',
    'ဩ' => 'aw',
    'သြော' => 'aw',
    'ဪ' => 'aw',
    '၍' => 'ywae',
    '၌' => 'hnaik',
    '၀' => '0',
    '၁' => '1',
    '၂' => '2',
    '၃' => '3',
    '၄' => '4',
    '၅' => '5',
    '၆' => '6',
    '၇' => '7',
    '၈' => '8',
    '၉' => '9',
    '္' => '',
    '့' => '',
    'း' => '',
    'ာ' => 'a',
    'ါ' => 'a',
    'ေ' => 'e',
    'ဲ' => 'e',
    'ိ' => 'i',
    'ီ' => 'i',
    'ို' => 'o',
    'ု' => 'u',
    'ူ' => 'u',
    'ေါင်' => 'aung',
    'ော' => 'aw',
    'ော်' => 'aw',
    'ေါ' => 'aw',
    'ေါ်' => 'aw',
    '်' => 'at',
    'က်' => 'et',
    'ိုက်' => 'aik',
    'ောက်' => 'auk',
    'င်' => 'in',
    'ိုင်' => 'aing',
    'ောင်' => 'aung',
    'စ်' => 'it',
    'ည်' => 'i',
    'တ်' => 'at',
    'ိတ်' => 'eik',
    'ုတ်' => 'ok',
    'ွတ်' => 'ut',
    'ေတ်' => 'it',
    'ဒ်' => 'd',
    'ိုဒ်' => 'ok',
    'ုဒ်' => 'ait',
    'န်' => 'an',
    'ာန်' => 'an',
    'ိန်' => 'ein',
    'ုန်' => 'on',
    'ွန်' => 'un',
    'ပ်' => 'at',
    'ိပ်' => 'eik',
    'ုပ်' => 'ok',
    'ွပ်' => 'ut',
    'န်ုပ်' => 'nub',
    'မ်' => 'an',
    'ိမ်' => 'ein',
    'ုမ်' => 'on',
    'ွမ်' => 'un',
    'ယ်' => 'e',
    'ိုလ်' => 'ol',
    'ဉ်' => 'in',
    'ံ' => 'an',
    'ိံ' => 'ein',
    'ုံ' => 'on',
  ),
  'czech' => 
  array (
    'Č' => 'C',
    'Ď' => 'D',
    'Ě' => 'E',
    'Ň' => 'N',
    'Ř' => 'R',
    'Š' => 'S',
    'Ť' => 'T',
    'Ů' => 'U',
    'Ž' => 'Z',
    'č' => 'c',
    'ď' => 'd',
    'ě' => 'e',
    'ň' => 'n',
    'ř' => 'r',
    'š' => 's',
    'ť' => 't',
    'ů' => 'u',
    'ž' => 'z',
  ),
  'default' => 
  array (
    '°' => '0',
    '¹' => '1',
    '²' => '2',
    '³' => '3',
    '⁴' => '4',
    '⁵' => '5',
    '⁶' => '6',
    '⁷' => '7',
    '⁸' => '8',
    '⁹' => '9',
    '₀' => '0',
    '₁' => '1',
    '₂' => '2',
    '₃' => '3',
    '₄' => '4',
    '₅' => '5',
    '₆' => '6',
    '₇' => '7',
    '₈' => '8',
    '₉' => '9',
    'æ' => 'ae',
    'ǽ' => 'ae',
    'À' => 'A',
    'Á' => 'A',
    'Â' => 'A',
    'Ã' => 'A',
    'Å' => 'AA',
    'Ǻ' => 'A',
    'Ă' => 'A',
    'Ǎ' => 'A',
    'Æ' => 'AE',
    'Ǽ' => 'AE',
    'à' => 'a',
    'á' => 'a',
    'â' => 'a',
    'ã' => 'a',
    'å' => 'aa',
    'ǻ' => 'a',
    'ă' => 'a',
    'ǎ' => 'a',
    'ª' => 'a',
    '@' => 'at',
    'Ĉ' => 'C',
    'Ċ' => 'C',
    'ĉ' => 'c',
    'ċ' => 'c',
    '©' => 'c',
    'Ð' => 'Dj',
    'Đ' => 'D',
    'ð' => 'dj',
    'đ' => 'd',
    'È' => 'E',
    'É' => 'E',
    'Ê' => 'E',
    'Ë' => 'E',
    'Ĕ' => 'E',
    'Ė' => 'E',
    'è' => 'e',
    'é' => 'e',
    'ê' => 'e',
    'ë' => 'e',
    'ĕ' => 'e',
    'ė' => 'e',
    'ƒ' => 'f',
    'Ĝ' => 'G',
    'Ġ' => 'G',
    'ĝ' => 'g',
    'ġ' => 'g',
    'Ĥ' => 'H',
    'Ħ' => 'H',
    'ĥ' => 'h',
    'ħ' => 'h',
    'Ì' => 'I',
    'Í' => 'I',
    'Î' => 'I',
    'Ï' => 'I',
    'Ĩ' => 'I',
    'Ĭ' => 'I',
    'Ǐ' => 'I',
    'Į' => 'I',
    'Ĳ' => 'IJ',
    'ì' => 'i',
    'í' => 'i',
    'î' => 'i',
    'ï' => 'i',
    'ĩ' => 'i',
    'ĭ' => 'i',
    'ǐ' => 'i',
    'į' => 'i',
    'ĳ' => 'ij',
    'Ĵ' => 'J',
    'ĵ' => 'j',
    'Ĺ' => 'L',
    'Ľ' => 'L',
    'Ŀ' => 'L',
    'ĺ' => 'l',
    'ľ' => 'l',
    'ŀ' => 'l',
    'Ñ' => 'N',
    'ñ' => 'n',
    'ŉ' => 'n',
    'Ò' => 'O',
    'Ó' => 'O',
    'Ô' => 'O',
    'Õ' => 'O',
    'Ō' => 'O',
    'Ŏ' => 'O',
    'Ǒ' => 'O',
    'Ő' => 'O',
    'Ơ' => 'O',
    'Ø' => 'OE',
    'Ǿ' => 'O',
    'Œ' => 'OE',
    'ò' => 'o',
    'ó' => 'o',
    'ô' => 'o',
    'õ' => 'o',
    'ō' => 'o',
    'ŏ' => 'o',
    'ǒ' => 'o',
    'ő' => 'o',
    'ơ' => 'o',
    'ø' => 'oe',
    'ǿ' => 'o',
    'º' => 'o',
    'œ' => 'oe',
    'Ŕ' => 'R',
    'Ŗ' => 'R',
    'ŕ' => 'r',
    'ŗ' => 'r',
    'Ŝ' => 'S',
    'Ș' => 'S',
    'ŝ' => 's',
    'ș' => 's',
    'ſ' => 's',
    'Ţ' => 'T',
    'Ț' => 'T',
    'Ŧ' => 'T',
    'Þ' => 'TH',
    'ţ' => 't',
    'ț' => 't',
    'ŧ' => 't',
    'þ' => 'th',
    'Ù' => 'U',
    'Ú' => 'U',
    'Û' => 'U',
    'Ü' => 'U',
    'Ũ' => 'U',
    'Ŭ' => 'U',
    'Ű' => 'U',
    'Ų' => 'U',
    'Ư' => 'U',
    'Ǔ' => 'U',
    'Ǖ' => 'U',
    'Ǘ' => 'U',
    'Ǚ' => 'U',
    'Ǜ' => 'U',
    'ù' => 'u',
    'ú' => 'u',
    'û' => 'u',
    'ü' => 'u',
    'ũ' => 'u',
    'ŭ' => 'u',
    'ű' => 'u',
    'ų' => 'u',
    'ư' => 'u',
    'ǔ' => 'u',
    'ǖ' => 'u',
    'ǘ' => 'u',
    'ǚ' => 'u',
    'ǜ' => 'u',
    'Ŵ' => 'W',
    'ŵ' => 'w',
    'Ý' => 'Y',
    'Ÿ' => 'Y',
    'Ŷ' => 'Y',
    'ý' => 'y',
    'ÿ' => 'y',
    'ŷ' => 'y',
  ),
  'esperanto' => 
  array (
    'ĉ' => 'cx',
    'ĝ' => 'gx',
    'ĥ' => 'hx',
    'ĵ' => 'jx',
    'ŝ' => 'sx',
    'ŭ' => 'ux',
    'Ĉ' => 'CX',
    'Ĝ' => 'GX',
    'Ĥ' => 'HX',
    'Ĵ' => 'JX',
    'Ŝ' => 'SX',
    'Ŭ' => 'UX',
  ),
  'finnish' => 
  array (
    'Ä' => 'A',
    'Ö' => 'O',
    'ä' => 'a',
    'ö' => 'o',
  ),
  'georgian' => 
  array (
    'ა' => 'a',
    'ბ' => 'b',
    'გ' => 'g',
    'დ' => 'd',
    'ე' => 'e',
    'ვ' => 'v',
    'ზ' => 'z',
    'თ' => 't',
    'ი' => 'i',
    'კ' => 'k',
    'ლ' => 'l',
    'მ' => 'm',
    'ნ' => 'n',
    'ო' => 'o',
    'პ' => 'p',
    'ჟ' => 'zh',
    'რ' => 'r',
    'ს' => 's',
    'ტ' => 't',
    'უ' => 'u',
    'ფ' => 'f',
    'ქ' => 'k',
    'ღ' => 'gh',
    'ყ' => 'q',
    'შ' => 'sh',
    'ჩ' => 'ch',
    'ც' => 'ts',
    'ძ' => 'dz',
    'წ' => 'ts',
    'ჭ' => 'ch',
    'ხ' => 'kh',
    'ჯ' => 'j',
    'ჰ' => 'h',
  ),
  'german' => 
  array (
    'Ä' => 'AE',
    'Ö' => 'OE',
    'Ü' => 'UE',
    'ß' => 'ss',
    'ä' => 'ae',
    'ö' => 'oe',
    'ü' => 'ue',
  ),
  'greek' => 
  array (
    'ΑΥ' => 'AU',
    'Αυ' => 'Au',
    'ΟΥ' => 'OU',
    'Ου' => 'Ou',
    'ΕΥ' => 'EU',
    'Ευ' => 'Eu',
    'ΕΙ' => 'I',
    'Ει' => 'I',
    'ΟΙ' => 'I',
    'Οι' => 'I',
    'ΥΙ' => 'I',
    'Υι' => 'I',
    'ΑΎ' => 'AU',
    'Αύ' => 'Au',
    'ΟΎ' => 'OU',
    'Ού' => 'Ou',
    'ΕΎ' => 'EU',
    'Εύ' => 'Eu',
    'ΕΊ' => 'I',
    'Εί' => 'I',
    'ΟΊ' => 'I',
    'Οί' => 'I',
    'ΎΙ' => 'I',
    'Ύι' => 'I',
    'ΥΊ' => 'I',
    'Υί' => 'I',
    'αυ' => 'au',
    'ου' => 'ou',
    'ευ' => 'eu',
    'ει' => 'i',
    'οι' => 'i',
    'υι' => 'i',
    'αύ' => 'au',
    'ού' => 'ou',
    'εύ' => 'eu',
    'εί' => 'i',
    'οί' => 'i',
    'ύι' => 'i',
    'υί' => 'i',
    'Α' => 'A',
    'Β' => 'V',
    'Γ' => 'G',
    'Δ' => 'D',
    'Ε' => 'E',
    'Ζ' => 'Z',
    'Η' => 'I',
    'Θ' => 'Th',
    'Ι' => 'I',
    'Κ' => 'K',
    'Λ' => 'L',
    'Μ' => 'M',
    'Ν' => 'N',
    'Ξ' => 'X',
    'Ο' => 'O',
    'Π' => 'P',
    'Ρ' => 'R',
    'Σ' => 'S',
    'Τ' => 'T',
    'Υ' => 'I',
    'Φ' => 'F',
    'Χ' => 'Ch',
    'Ψ' => 'Ps',
    'Ω' => 'O',
    'Ά' => 'A',
    'Έ' => 'E',
    'Ή' => 'I',
    'Ί' => 'I',
    'Ό' => 'O',
    'Ύ' => 'I',
    'Ϊ' => 'I',
    'Ϋ' => 'I',
    'ϒ' => 'I',
    'α' => 'a',
    'β' => 'v',
    'γ' => 'g',
    'δ' => 'd',
    'ε' => 'e',
    'ζ' => 'z',
    'η' => 'i',
    'θ' => 'th',
    'ι' => 'i',
    'κ' => 'k',
    'λ' => 'l',
    'μ' => 'm',
    'ν' => 'n',
    'ξ' => 'x',
    'ο' => 'o',
    'π' => 'p',
    'ρ' => 'r',
    'ς' => 's',
    'σ' => 's',
    'τ' => 't',
    'υ' => 'i',
    'φ' => 'f',
    'χ' => 'ch',
    'ψ' => 'ps',
    'ω' => 'o',
    'ά' => 'a',
    'έ' => 'e',
    'ή' => 'i',
    'ί' => 'i',
    'ό' => 'o',
    'ύ' => 'i',
    'ϊ' => 'i',
    'ϋ' => 'i',
    'ΰ' => 'i',
    'ώ' => 'o',
    'ϐ' => 'v',
    'ϑ' => 'th',
  ),
  'hindi' => 
  array (
    'अ' => 'a',
    'आ' => 'aa',
    'ए' => 'e',
    'ई' => 'ii',
    'ऍ' => 'ei',
    'ऎ' => 'ऎ',
    'ऐ' => 'ai',
    'इ' => 'i',
    'ओ' => 'o',
    'ऑ' => 'oi',
    'ऒ' => 'oii',
    'ऊ' => 'uu',
    'औ' => 'ou',
    'उ' => 'u',
    'ब' => 'B',
    'भ' => 'Bha',
    'च' => 'Ca',
    'छ' => 'Chha',
    'ड' => 'Da',
    'ढ' => 'Dha',
    'फ' => 'Fa',
    'फ़' => 'Fi',
    'ग' => 'Ga',
    'घ' => 'Gha',
    'ग़' => 'Ghi',
    'ह' => 'Ha',
    'ज' => 'Ja',
    'झ' => 'Jha',
    'क' => 'Ka',
    'ख' => 'Kha',
    'ख़' => 'Khi',
    'ल' => 'L',
    'ळ' => 'Li',
    'ऌ' => 'Li',
    'ऴ' => 'Lii',
    'ॡ' => 'Lii',
    'म' => 'Ma',
    'न' => 'Na',
    'ङ' => 'Na',
    'ञ' => 'Nia',
    'ण' => 'Nae',
    'ऩ' => 'Ni',
    'ॐ' => 'oms',
    'प' => 'Pa',
    'क़' => 'Qi',
    'र' => 'Ra',
    'ऋ' => 'Ri',
    'ॠ' => 'Ri',
    'ऱ' => 'Ri',
    'स' => 'Sa',
    'श' => 'Sha',
    'ष' => 'Shha',
    'ट' => 'Ta',
    'त' => 'Ta',
    'ठ' => 'Tha',
    'द' => 'Tha',
    'थ' => 'Tha',
    'ध' => 'Thha',
    'ड़' => 'ugDha',
    'ढ़' => 'ugDhha',
    'व' => 'Va',
    'य' => 'Ya',
    'य़' => 'Yi',
    'ज़' => 'Za',
  ),
  'latvian' => 
  array (
    'Ā' => 'A',
    'Ē' => 'E',
    'Ģ' => 'G',
    'Ī' => 'I',
    'Ķ' => 'K',
    'Ļ' => 'L',
    'Ņ' => 'N',
    'Ū' => 'U',
    'ā' => 'a',
    'ē' => 'e',
    'ģ' => 'g',
    'ī' => 'i',
    'ķ' => 'k',
    'ļ' => 'l',
    'ņ' => 'n',
    'ū' => 'u',
  ),
  'norwegian' => 
  array (
    'Æ' => 'AE',
    'Ø' => 'OE',
    'Å' => 'AA',
    'æ' => 'ae',
    'ø' => 'oe',
    'å' => 'aa',
  ),
  'polish' => 
  array (
    'Ą' => 'A',
    'Ć' => 'C',
    'Ę' => 'E',
    'Ł' => 'L',
    'Ń' => 'N',
    'Ó' => 'O',
    'Ś' => 'S',
    'Ź' => 'Z',
    'Ż' => 'Z',
    'ą' => 'a',
    'ć' => 'c',
    'ę' => 'e',
    'ł' => 'l',
    'ń' => 'n',
    'ó' => 'o',
    'ś' => 's',
    'ź' => 'z',
    'ż' => 'z',
  ),
  'russian' => 
  array (
    'Ъ' => '',
    'Ь' => '',
    'А' => 'A',
    'Б' => 'B',
    'Ц' => 'C',
    'Ч' => 'Ch',
    'Д' => 'D',
    'Е' => 'E',
    'Ё' => 'E',
    'Э' => 'E',
    'Ф' => 'F',
    'Г' => 'G',
    'Х' => 'H',
    'И' => 'I',
    'Й' => 'Y',
    'Я' => 'Ya',
    'Ю' => 'Yu',
    'К' => 'K',
    'Л' => 'L',
    'М' => 'M',
    'Н' => 'N',
    'О' => 'O',
    'П' => 'P',
    'Р' => 'R',
    'С' => 'S',
    'Ш' => 'Sh',
    'Щ' => 'Shch',
    'Т' => 'T',
    'У' => 'U',
    'В' => 'V',
    'Ы' => 'Y',
    'З' => 'Z',
    'Ж' => 'Zh',
    'ъ' => '',
    'ь' => '',
    'а' => 'a',
    'б' => 'b',
    'ц' => 'c',
    'ч' => 'ch',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'e',
    'э' => 'e',
    'ф' => 'f',
    'г' => 'g',
    'х' => 'h',
    'и' => 'i',
    'й' => 'y',
    'я' => 'ya',
    'ю' => 'yu',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'ш' => 'sh',
    'щ' => 'shch',
    'т' => 't',
    'у' => 'u',
    'в' => 'v',
    'ы' => 'y',
    'з' => 'z',
    'ж' => 'zh',
  ),
  'swedish' => 
  array (
    'Ä' => 'A',
    'Å' => 'a',
    'Ö' => 'O',
    'ä' => 'a',
    'å' => 'a',
    'ö' => 'o',
  ),
  'turkish' => 
  array (
    'Ç' => 'C',
    'Ğ' => 'G',
    'İ' => 'I',
    'Ş' => 'S',
    'Ö' => 'O',
    'Ü' => 'U',
    'ç' => 'c',
    'ğ' => 'g',
    'ı' => 'i',
    'ş' => 's',
    'ö' => 'o',
    'ü' => 'u',
  ),
  'ukrainian' => 
  array (
    'Ґ' => 'G',
    'І' => 'I',
    'Ї' => 'Ji',
    'Є' => 'Ye',
    'ґ' => 'g',
    'і' => 'i',
    'ї' => 'ji',
    'є' => 'ye',
  ),
  'vietnamese' => 
  array (
    'ạ' => 'a',
    'ả' => 'a',
    'ầ' => 'a',
    'ấ' => 'a',
    'ậ' => 'a',
    'ẩ' => 'a',
    'ẫ' => 'a',
    'ằ' => 'a',
    'ắ' => 'a',
    'ặ' => 'a',
    'ẳ' => 'a',
    'ẵ' => 'a',
    'ẹ' => 'e',
    'ẻ' => 'e',
    'ẽ' => 'e',
    'ề' => 'e',
    'ế' => 'e',
    'ệ' => 'e',
    'ể' => 'e',
    'ễ' => 'e',
    'ị' => 'i',
    'ỉ' => 'i',
    'ọ' => 'o',
    'ỏ' => 'o',
    'ồ' => 'o',
    'ố' => 'o',
    'ộ' => 'o',
    'ổ' => 'o',
    'ỗ' => 'o',
    'ờ' => 'o',
    'ớ' => 'o',
    'ợ' => 'o',
    'ở' => 'o',
    'ỡ' => 'o',
    'ụ' => 'u',
    'ủ' => 'u',
    'ừ' => 'u',
    'ứ' => 'u',
    'ự' => 'u',
    'ử' => 'u',
    'ữ' => 'u',
    'ỳ' => 'y',
    'ỵ' => 'y',
    'ỷ' => 'y',
    'ỹ' => 'y',
    'Ạ' => 'A',
    'Ả' => 'A',
    'Ầ' => 'A',
    'Ấ' => 'A',
    'Ậ' => 'A',
    'Ẩ' => 'A',
    'Ẫ' => 'A',
    'Ằ' => 'A',
    'Ắ' => 'A',
    'Ặ' => 'A',
    'Ẳ' => 'A',
    'Ẵ' => 'A',
    'Ẹ' => 'E',
    'Ẻ' => 'E',
    'Ẽ' => 'E',
    'Ề' => 'E',
    'Ế' => 'E',
    'Ệ' => 'E',
    'Ể' => 'E',
    'Ễ' => 'E',
    'Ị' => 'I',
    'Ỉ' => 'I',
    'Ọ' => 'O',
    'Ỏ' => 'O',
    'Ồ' => 'O',
    'Ố' => 'O',
    'Ộ' => 'O',
    'Ổ' => 'O',
    'Ỗ' => 'O',
    'Ờ' => 'O',
    'Ớ' => 'O',
    'Ợ' => 'O',
    'Ở' => 'O',
    'Ỡ' => 'O',
    'Ụ' => 'U',
    'Ủ' => 'U',
    'Ừ' => 'U',
    'Ứ' => 'U',
    'Ự' => 'U',
    'Ử' => 'U',
    'Ữ' => 'U',
    'Ỳ' => 'Y',
    'Ỵ' => 'Y',
    'Ỷ' => 'Y',
    'Ỹ' => 'Y',
  ),
)/*INSERT_END*/;

    /**
     * @param string $ruleset
     *
     * @return array
     */
    public function getRules($ruleset)
    {
        return $this->rules[$ruleset];
    }
}
