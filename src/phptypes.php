<?php

namespace KalimahApps\Daleel;

/**
 * @var
 */
const PHP_TYPES = array(
	'apciterator',
	'apcuiterator',
	'appenditerator',
	'argumentcounterror',
	'arithmeticerror',
	'arrayaccess',
	'arrayiterator',
	'arrayobject',
	'assertionerror',
	'badfunctioncallexception',
	'badmethodcallexception',
	'cachingiterator',
	'cairo',
	'cairoantialias',
	'cairocontent',
	'cairocontext',
	'cairoexception',
	'cairoextend',
	'cairofillrule',
	'cairofilter',
	'cairofontface',
	'cairofontoptions',
	'cairofontslant',
	'cairofonttype',
	'cairofontweight',
	'cairoformat',
	'cairogradientpattern',
	'cairohintmetrics',
	'cairohintstyle',
	'cairoimagesurface',
	'cairolineargradient',
	'cairolinecap',
	'cairolinejoin',
	'cairomatrix',
	'cairooperator',
	'cairopath',
	'cairopattern',
	'cairopatterntype',
	'cairopdfsurface',
	'cairopslevel',
	'cairopssurface',
	'cairoradialgradient',
	'cairoscaledfont',
	'cairosolidpattern',
	'cairostatus',
	'cairosubpixelorder',
	'cairosurface',
	'cairosurfacepattern',
	'cairosurfacetype',
	'cairosvgsurface',
	'cairosvgversion',
	'cairotoyfontface',
	'callbackfilteriterator',
	'chdb',
	'closure',
	'collator',
	'collectable',
	'com-exception',
	'com',
	'commonmark-cql',
	'commonmark-interfaces-ivisitable',
	'commonmark-interfaces-ivisitor',
	'commonmark-node-blockquote',
	'commonmark-node-bulletlist',
	'commonmark-node-code',
	'commonmark-node-codeblock',
	'commonmark-node-customblock',
	'commonmark-node-custominline',
	'commonmark-node-document',
	'commonmark-node-heading',
	'commonmark-node-htmlblock',
	'commonmark-node-htmlinline',
	'commonmark-node-image',
	'commonmark-node-item',
	'commonmark-node-linebreak',
	'commonmark-node-link',
	'commonmark-node-orderedlist',
	'commonmark-node-paragraph',
	'commonmark-node-softbreak',
	'commonmark-node-text-emphasis',
	'commonmark-node-text-strong',
	'commonmark-node-text',
	'commonmark-node-thematicbreak',
	'commonmark-node',
	'commonmark-parser',
	'compersisthelper',
	'compileerror',
	'componere-abstract-definition',
	'componere-definition',
	'componere-method',
	'componere-patch',
	'componere-value',
	'cond',
	'countable',
	'curlfile',
	'dateinterval',
	'dateperiod',
	'datetime',
	'datetimeimmutable',
	'datetimeinterface',
	'datetimezone',
	'directory',
	'directoryiterator',
	'divisionbyzeroerror',
	'domainexception',
	'domattr',
	'domcdatasection',
	'domcharacterdata',
	'domcomment',
	'domdocument',
	'domdocumentfragment',
	'domdocumenttype',
	'domelement',
	'domentity',
	'domentityreference',
	'domexception',
	'domimplementation',
	'domnamednodemap',
	'domnode',
	'domnodelist',
	'domnotation',
	'domprocessinginstruction',
	'domtext',
	'domxpath',
	'dotnet',
	'ds-collection',
	'ds-deque',
	'ds-hashable',
	'ds-map',
	'ds-pair',
	'ds-priorityqueue',
	'ds-queue',
	'ds-sequence',
	'ds-set',
	'ds-stack',
	'ds-vector',
	'emptyiterator',
	'error',
	'errorexception',
	'ev',
	'evcheck',
	'evchild',
	'evembed',
	'event',
	'eventbase',
	'eventbuffer',
	'eventbufferevent',
	'eventconfig',
	'eventdnsbase',
	'eventhttp',
	'eventhttpconnection',
	'eventhttprequest',
	'eventlistener',
	'eventsslcontext',
	'eventutil',
	'evfork',
	'evidle',
	'evio',
	'evloop',
	'evperiodic',
	'evprepare',
	'evsignal',
	'evstat',
	'evtimer',
	'evwatcher',
	'exception',
	'fannconnection',
	'ffi-cdata',
	'ffi-ctype',
	'ffi-exception',
	'ffi-parserexception',
	'ffi',
	'filesystemiterator',
	'filteriterator',
	'finfo',
	'gearmanclient',
	'gearmanexception',
	'gearmanjob',
	'gearmantask',
	'gearmanworker',
	'gender',
	'generator',
	'globiterator',
	'gmagick',
	'gmagickdraw',
	'gmagickpixel',
	'gmp',
	'haruannotation',
	'harudestination',
	'harudoc',
	'haruencoder',
	'haruexception',
	'harufont',
	'haruimage',
	'haruoutline',
	'harupage',
	'hashcontext',
	'hrtime-performancecounter',
	'hrtime-stopwatch',
	'hrtime-unit',
	'imagick',
	'imagickdraw',
	'imagickkernel',
	'imagickpixel',
	'imagickpixeliterator',
	'infiniteiterator',
	'intlbreakiterator',
	'intlcalendar',
	'intlchar',
	'intlcodepointbreakiterator',
	'intldateformatter',
	'intlexception',
	'intlgregoriancalendar',
	'intliterator',
	'intlpartsiterator',
	'intlrulebasedbreakiterator',
	'intltimezone',
	'invalidargumentexception',
	'iterator',
	'iteratoraggregate',
	'iteratoriterator',
	'jsonexception',
	'jsonserializable',
	'judy',
	'ktaglib-id3v2-attachedpictureframe',
	'ktaglib-id3v2-frame',
	'ktaglib-id3v2-tag',
	'ktaglib-mpeg-audioproperties',
	'ktaglib-mpeg-file',
	'ktaglib-tag',
	'lapack',
	'lapackexception',
	'lengthexception',
	'libxmlerror',
	'limititerator',
	'locale',
	'logicexception',
	'lua',
	'luaclosure',
	'luasandbox',
	'luasandboxerror',
	'luasandboxerrorerror',
	'luasandboxfatalerror',
	'luasandboxfunction',
	'luasandboxmemoryerror',
	'luasandboxruntimeerror',
	'luasandboxsyntaxerror',
	'luasandboxtimeouterror',
	'memcache',
	'memcached',
	'memcachedexception',
	'messageformatter',
	'mongo',
	'mongobindata',
	'mongoclient',
	'mongocode',
	'mongocollection',
	'mongocommandcursor',
	'mongoconnectionexception',
	'mongocursor',
	'mongocursorexception',
	'mongocursorinterface',
	'mongocursortimeoutexception',
	'mongodate',
	'mongodb-bson-binary',
	'mongodb-bson-binaryinterface',
	'mongodb-bson-dbpointer',
	'mongodb-bson-decimal128',
	'mongodb-bson-decimal128interface',
	'mongodb-bson-int64',
	'mongodb-bson-javascript',
	'mongodb-bson-javascriptinterface',
	'mongodb-bson-maxkey',
	'mongodb-bson-maxkeyinterface',
	'mongodb-bson-minkey',
	'mongodb-bson-minkeyinterface',
	'mongodb-bson-objectid',
	'mongodb-bson-objectidinterface',
	'mongodb-bson-persistable',
	'mongodb-bson-regex',
	'mongodb-bson-regexinterface',
	'mongodb-bson-serializable',
	'mongodb-bson-symbol',
	'mongodb-bson-timestamp',
	'mongodb-bson-timestampinterface',
	'mongodb-bson-type',
	'mongodb-bson-undefined',
	'mongodb-bson-unserializable',
	'mongodb-bson-utcdatetime',
	'mongodb-bson-utcdatetimeinterface',
	'mongodb-driver-bulkwrite',
	'mongodb-driver-clientencryption',
	'mongodb-driver-command',
	'mongodb-driver-cursor',
	'mongodb-driver-cursorid',
	'mongodb-driver-cursorinterface',
	'mongodb-driver-exception-authenticationexception',
	'mongodb-driver-exception-bulkwriteexception',
	'mongodb-driver-exception-commandexception',
	'mongodb-driver-exception-connectionexception',
	'mongodb-driver-exception-connectiontimeoutexception',
	'mongodb-driver-exception-encryptionexception',
	'mongodb-driver-exception-exception',
	'mongodb-driver-exception-executiontimeoutexception',
	'mongodb-driver-exception-invalidargumentexception',
	'mongodb-driver-exception-logicexception',
	'mongodb-driver-exception-runtimeexception',
	'mongodb-driver-exception-serverexception',
	'mongodb-driver-exception-sslconnectionexception',
	'mongodb-driver-exception-unexpectedvalueexception',
	'mongodb-driver-exception-writeexception',
	'mongodb-driver-manager',
	'mongodb-driver-monitoring-commandfailedevent',
	'mongodb-driver-monitoring-commandstartedevent',
	'mongodb-driver-monitoring-commandsubscriber',
	'mongodb-driver-monitoring-commandsucceededevent',
	'mongodb-driver-monitoring-subscriber',
	'mongodb-driver-query',
	'mongodb-driver-readconcern',
	'mongodb-driver-readpreference',
	'mongodb-driver-server',
	'mongodb-driver-session',
	'mongodb-driver-writeconcern',
	'mongodb-driver-writeconcernerror',
	'mongodb-driver-writeerror',
	'mongodb-driver-writeresult',
	'mongodb',
	'mongodbref',
	'mongodeletebatch',
	'mongoduplicatekeyexception',
	'mongoexception',
	'mongoexecutiontimeoutexception',
	'mongogridfs',
	'mongogridfscursor',
	'mongogridfsexception',
	'mongogridfsfile',
	'mongoid',
	'mongoinsertbatch',
	'mongoint32',
	'mongoint64',
	'mongolog',
	'mongomaxkey',
	'mongominkey',
	'mongopool',
	'mongoprotocolexception',
	'mongoregex',
	'mongoresultexception',
	'mongotimestamp',
	'mongoupdatebatch',
	'mongowritebatch',
	'mongowriteconcernexception',
	'multipleiterator',
	'mutex',
	'mysql-xdevapi-baseresult',
	'mysql-xdevapi-client',
	'mysql-xdevapi-collection',
	'mysql-xdevapi-collectionadd',
	'mysql-xdevapi-collectionfind',
	'mysql-xdevapi-collectionmodify',
	'mysql-xdevapi-collectionremove',
	'mysql-xdevapi-columnresult',
	'mysql-xdevapi-crudoperationbindable',
	'mysql-xdevapi-crudoperationlimitable',
	'mysql-xdevapi-crudoperationskippable',
	'mysql-xdevapi-crudoperationsortable',
	'mysql-xdevapi-databaseobject',
	'mysql-xdevapi-docresult',
	'mysql-xdevapi-exception',
	'mysql-xdevapi-executable',
	'mysql-xdevapi-executionstatus',
	'mysql-xdevapi-expression',
	'mysql-xdevapi-result',
	'mysql-xdevapi-rowresult',
	'mysql-xdevapi-schema',
	'mysql-xdevapi-schemaobject',
	'mysql-xdevapi-session',
	'mysql-xdevapi-sqlstatement',
	'mysql-xdevapi-sqlstatementresult',
	'mysql-xdevapi-statement',
	'mysql-xdevapi-table',
	'mysql-xdevapi-tabledelete',
	'mysql-xdevapi-tableinsert',
	'mysql-xdevapi-tableselect',
	'mysql-xdevapi-tableupdate',
	'mysql-xdevapi-warning',
	'mysqli-driver',
	'mysqli-result',
	'mysqli-sql-exception',
	'mysqli-stmt',
	'mysqli-warning',
	'mysqli',
	'mysqlnduhconnection',
	'mysqlnduhpreparedstatement',
	'norewinditerator',
	'normalizer',
	'numberformatter',
	'oauth',
	'oauthexception',
	'oauthprovider',
	'OCI-Collection',
	'OCI-Lob',
	'outeriterator',
	'outofboundsexception',
	'outofrangeexception',
	'overflowexception',
	'parallel-channel',
	'parallel-events-event-type',
	'parallel-events-event',
	'parallel-events-input',
	'parallel-events',
	'parallel-future',
	'parallel-runtime',
	'parallel-sync',
	'parentiterator',
	'parle-errorinfo',
	'parle-lexer',
	'parle-lexerexception',
	'parle-parser',
	'parle-parserexception',
	'parle-rlexer',
	'parle-rparser',
	'parle-stack',
	'parle-token',
	'parseerror',
	'pdo',
	'pdoexception',
	'pdostatement',
	'phar',
	'phardata',
	'pharexception',
	'pharfileinfo',
	'phdfs',
	'php-user-filter',
	'pht-atomicinteger',
	'pht-hashtable',
	'pht-queue',
	'pht-runnable',
	'pht-thread',
	'pht-threaded',
	'pht-vector',
	'pool',
	'quickhashinthash',
	'quickhashintset',
	'quickhashintstringhash',
	'quickhashstringinthash',
	'rangeexception',
	'rararchive',
	'rarentry',
	'rarexception',
	'recursivearrayiterator',
	'recursivecachingiterator',
	'recursivecallbackfilteriterator',
	'recursivedirectoryiterator',
	'recursivefilteriterator',
	'recursiveiterator',
	'recursiveiteratoriterator',
	'recursiveregexiterator',
	'recursivetreeiterator',
	'reflection',
	'reflectionclass',
	'reflectionclassconstant',
	'reflectionexception',
	'reflectionextension',
	'reflectionfunction',
	'reflectionfunctionabstract',
	'reflectiongenerator',
	'reflectionmethod',
	'reflectionnamedtype',
	'reflectionobject',
	'reflectionparameter',
	'reflectionproperty',
	'reflectionreference',
	'reflectiontype',
	'reflectionzendextension',
	'reflector',
	'regexiterator',
	'resourcebundle',
	'rrdcreator',
	'rrdgraph',
	'rrdupdater',
	'runtimeexception',
	'seaslog',
	'seekableiterator',
	'serializable',
	'sessionhandler',
	'sessionhandlerinterface',
	'sessionidinterface',
	'sessionupdatetimestamphandlerinterface',
	'simplexmlelement',
	'simplexmliterator',
	'snmp',
	'snmpexception',
	'soapclient',
	'soapfault',
	'soapheader',
	'soapparam',
	'soapserver',
	'soapvar',
	'solrclient',
	'solrclientexception',
	'solrcollapsefunction',
	'solrdismaxquery',
	'solrdocument',
	'solrdocumentfield',
	'solrexception',
	'solrgenericresponse',
	'solrillegalargumentexception',
	'solrillegaloperationexception',
	'solrinputdocument',
	'solrmissingmandatoryparameterexception',
	'solrmodifiableparams',
	'solrobject',
	'solrparams',
	'solrpingresponse',
	'solrquery',
	'solrqueryresponse',
	'solrresponse',
	'solrserverexception',
	'solrupdateresponse',
	'solrutils',
	'sphinxclient',
	'splbool',
	'spldoublylinkedlist',
	'splenum',
	'splfileinfo',
	'splfileobject',
	'splfixedarray',
	'splfloat',
	'splheap',
	'splint',
	'splmaxheap',
	'splminheap',
	'splobjectstorage',
	'splobserver',
	'splpriorityqueue',
	'splqueue',
	'splstack',
	'splstring',
	'splsubject',
	'spltempfileobject',
	'spltype',
	'spoofchecker',
	'sqlite3',
	'sqlite3result',
	'sqlite3stmt',
	'stomp',
	'stompexception',
	'stompframe',
	'streamwrapper',
	'svm',
	'svmmodel',
	'swfaction',
	'swfbitmap',
	'swfbutton',
	'swfdisplayitem',
	'swffill',
	'swffont',
	'swffontchar',
	'swfgradient',
	'swfmorph',
	'swfmovie',
	'swfprebuiltclip',
	'swfshape',
	'swfsound',
	'swfsoundinstance',
	'swfsprite',
	'swftext',
	'swftextfield',
	'swfvideostream',
	'swoole-async',
	'swoole-atomic',
	'swoole-buffer',
	'swoole-channel',
	'swoole-client',
	'swoole-connection-iterator',
	'swoole-coroutine',
	'swoole-event',
	'swoole-exception',
	'swoole-http-client',
	'swoole-http-request',
	'swoole-http-response',
	'swoole-http-server',
	'swoole-lock',
	'swoole-mmap',
	'swoole-mysql-exception',
	'swoole-mysql',
	'swoole-process',
	'swoole-redis-server',
	'swoole-serialize',
	'swoole-server',
	'swoole-table',
	'swoole-timer',
	'swoole-websocket-frame',
	'swoole-websocket-server',
	'syncevent',
	'syncmutex',
	'syncreaderwriter',
	'syncsemaphore',
	'syncsharedmemory',
	'thread',
	'threaded',
	'throwable',
	'tidy',
	'tidynode',
	'tokyotyrant',
	'tokyotyrantexception',
	'tokyotyrantiterator',
	'tokyotyrantquery',
	'tokyotyranttable',
	'transliterator',
	'traversable',
	'typeerror',
	'uconverter',
	'ui-area',
	'ui-control',
	'ui-controls-box',
	'ui-controls-button',
	'ui-controls-check',
	'ui-controls-colorbutton',
	'ui-controls-combo',
	'ui-controls-editablecombo',
	'ui-controls-entry',
	'ui-controls-form',
	'ui-controls-grid',
	'ui-controls-group',
	'ui-controls-label',
	'ui-controls-multilineentry',
	'ui-controls-picker',
	'ui-controls-progress',
	'ui-controls-radio',
	'ui-controls-separator',
	'ui-controls-slider',
	'ui-controls-spin',
	'ui-controls-tab',
	'ui-draw-brush-gradient',
	'ui-draw-brush-lineargradient',
	'ui-draw-brush-radialgradient',
	'ui-draw-brush',
	'ui-draw-color',
	'ui-draw-line-cap',
	'ui-draw-line-join',
	'ui-draw-matrix',
	'ui-draw-path',
	'ui-draw-pen',
	'ui-draw-stroke',
	'ui-draw-text-font-descriptor',
	'ui-draw-text-font-italic',
	'ui-draw-text-font-stretch',
	'ui-draw-text-font-weight',
	'ui-draw-text-font',
	'ui-draw-text-layout',
	'ui-exception-invalidargumentexception',
	'ui-exception-runtimeexception',
	'ui-executor',
	'ui-key',
	'ui-menu',
	'ui-menuitem',
	'ui-point',
	'ui-size',
	'ui-window',
	'underflowexception',
	'unexpectedvalueexception',
	'v8js',
	'v8jsexception',
	'variant',
	'varnishadmin',
	'varnishlog',
	'varnishstat',
	'volatile',
	'vtiful-kernel-excel',
	'vtiful-kernel-format',
	'weakmap',
	'weakref',
	'weakreference',
	'wkhtmltox-image-converter',
	'wkhtmltox-pdf-converter',
	'wkhtmltox-pdf-object',
	'worker',
	'xmldiff-base',
	'xmldiff-dom',
	'xmldiff-file',
	'xmldiff-memory',
	'xmlreader',
	'xsltprocessor',
	'yac',
	'yaconf',
	'yaf-action-abstract',
	'yaf-application',
	'yaf-bootstrap-abstract',
	'yaf-config-abstract',
	'yaf-config-ini',
	'yaf-config-simple',
	'yaf-controller-abstract',
	'yaf-dispatcher',
	'yaf-exception-dispatchfailed',
	'yaf-exception-loadfailed-action',
	'yaf-exception-loadfailed-controller',
	'yaf-exception-loadfailed-module',
	'yaf-exception-loadfailed-view',
	'yaf-exception-loadfailed',
	'yaf-exception-routerfailed',
	'yaf-exception-startuperror',
	'yaf-exception-typeerror',
	'yaf-exception',
	'yaf-loader',
	'yaf-plugin-abstract',
	'yaf-registry',
	'yaf-request-abstract',
	'yaf-request-http',
	'yaf-request-simple',
	'yaf-response-abstract',
	'yaf-route-interface',
	'yaf-route-map',
	'yaf-route-regex',
	'yaf-route-rewrite',
	'yaf-route-simple',
	'yaf-route-static',
	'yaf-route-supervar',
	'yaf-router',
	'yaf-session',
	'yaf-view-interface',
	'yaf-view-simple',
	'yar-client-exception',
	'yar-client',
	'yar-concurrent-client',
	'yar-server-exception',
	'yar-server',
	'ziparchive',
	'zmq',
	'zmqcontext',
	'zmqdevice',
	'zmqpoll',
	'zmqsocket',
	'zookeeper',
	'zookeeperauthenticationexception',
	'zookeeperconfig',
	'zookeeperconnectionexception',
	'zookeeperexception',
	'zookeepermarshallingexception',
	'zookeepernonodeexception',
	'zookeeperoperationtimeoutexception',
	'zookeepersessionexception',
);