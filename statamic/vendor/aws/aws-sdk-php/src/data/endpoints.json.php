<?php
// This file was auto-generated from sdk-root/src/data/endpoints.json
return [ 'version' => 3, 'partitions' => [ [ 'partition' => 'aws-us-gov', 'partitionName' => 'AWS GovCloud (US)', 'regionRegex' => '^us\\-gov\\-\\w+\\-\\d+$', 'dnsSuffix' => 'amazonaws.com', 'defaults' => [ 'hostname' => '{service}.{region}.{dnsSuffix}', 'protocols' => [ 'https', ], 'signatureVersions' => [ 'v4', ], ], 'regions' => [ 'us-gov-west-1' => [ 'description' => 'AWS GovCloud (US)', ], ], 'services' => [ 'autoscaling' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'cloudformation' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'cloudhsm' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'cloudtrail' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'config' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'directconnect' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'dynamodb' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'ec2' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'elasticache' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'elasticloadbalancing' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'elasticmapreduce' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'glacier' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'iam' => [ 'endpoints' => [ 'aws-us-gov-global' => [ 'hostname' => 'iam.us-gov.amazonaws.com', 'credentialScope' => [ 'region' => 'us-gov-west-1', ], ], ], 'isRegionalized' => false, 'partitionEndpoint' => 'aws-us-gov-global', ], 'kms' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'logs' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'monitoring' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'rds' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'redshift' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 's3' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'hostname' => 's3-us-gov-west-1.amazonaws.com', 'protocols' => [ 'http', 'https', ], ], 'fips-us-gov-west-1' => [ 'credentialScope' => [ 'region' => 'us-gov-west-1', ], 'hostname' => 's3-fips-us-gov-west-1.amazonaws.com', ], ], 'defaults' => [ 'signatureVersions' => [ 's3', 's3v4', ], ], ], 'snowball' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'sns' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'sqs' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'sslCommonName' => '{region}.queue.{dnsSuffix}', 'protocols' => [ 'http', 'https', ], ], ], ], 'streams.dynamodb' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], 'defaults' => [ 'credentialScope' => [ 'service' => 'dynamodb', ], ], ], 'sts' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'swf' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], ], ], [ 'partition' => 'aws', 'partitionName' => 'AWS Standard', 'regionRegex' => '^(us|eu|ap|sa|ca)\\-\\w+\\-\\d+$', 'dnsSuffix' => 'amazonaws.com', 'defaults' => [ 'hostname' => '{service}.{region}.{dnsSuffix}', 'protocols' => [ 'https', ], 'signatureVersions' => [ 'v4', ], ], 'regions' => [ 'ap-northeast-2' => [ 'description' => 'Asia Pacific (Seoul)', ], 'us-west-2' => [ 'description' => 'US West (Oregon)', ], 'ap-south-1' => [ 'description' => 'Asia Pacific (Mumbai)', ], 'ap-southeast-2' => [ 'description' => 'Asia Pacific (Sydney)', ], 'us-west-1' => [ 'description' => 'US West (N. California)', ], 'ap-southeast-1' => [ 'description' => 'Asia Pacific (Singapore)', ], 'us-east-2' => [ 'description' => 'US East (Ohio)', ], 'sa-east-1' => [ 'description' => 'South America (Sao Paulo)', ], 'us-east-1' => [ 'description' => 'US East (N. Virginia)', ], 'ap-northeast-1' => [ 'description' => 'Asia Pacific (Tokyo)', ], 'eu-central-1' => [ 'description' => 'EU (Frankfurt)', ], 'eu-west-1' => [ 'description' => 'EU (Ireland)', ], ], 'services' => [ 'acm' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'apigateway' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'application-autoscaling' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'hostname' => 'autoscaling.{region}.amazonaws.com', 'credentialScope' => [ 'service' => 'application-autoscaling', ], 'protocols' => [ 'http', 'https', ], ], ], 'appstream' => [ 'endpoints' => [ 'us-east-1' => [], 'ap-northeast-1' => [], ], ], 'autoscaling' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'budgets' => [ 'endpoints' => [ 'aws-global' => [ 'hostname' => 'budgets.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], 'isRegionalized' => false, 'partitionEndpoint' => 'aws-global', ], 'cloudformation' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'cloudfront' => [ 'endpoints' => [ 'aws-global' => [ 'hostname' => 'cloudfront.amazonaws.com', 'protocols' => [ 'http', 'https', ], 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, ], 'cloudhsm' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'cloudsearch' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'cloudtrail' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'codecommit' => [ 'endpoints' => [ 'us-east-2' => [], 'us-east-1' => [], ], ], 'codedeploy' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'codepipeline' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'eu-west-1' => [], ], ], 'cognito-identity' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'cognito-idp' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'cognito-sync' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'config' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'data.iot' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'https', ], 'credentialScope' => [ 'service' => 'iotdata', ], ], ], 'datapipeline' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-west-1' => [], ], ], 'devicefarm' => [ 'endpoints' => [ 'us-west-2' => [], ], ], 'directconnect' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'discovery' => [ 'endpoints' => [ 'us-west-2' => [], ], ], 'dms' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'ds' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'dynamodb' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'local' => [ 'hostname' => 'localhost:8000', 'protocols' => [ 'http', ], 'credentialScope' => [ 'region' => 'us-east-1', ], ], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'ec2' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'ecr' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'ecs' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'elasticache' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'elasticbeanstalk' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'elasticfilesystem' => [ 'endpoints' => [ 'us-west-2' => [], 'us-east-2' => [], 'us-east-1' => [], 'eu-west-1' => [], ], ], 'elasticloadbalancing' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'elasticmapreduce' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [ 'sslCommonName' => '{service}.{region}.{dnsSuffix}', ], 'ap-northeast-1' => [], 'eu-central-1' => [ 'sslCommonName' => '{service}.{region}.{dnsSuffix}', ], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'sslCommonName' => '{region}.{service}.{dnsSuffix}', ], ], 'elastictranscoder' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-west-1' => [], ], ], 'email' => [ 'endpoints' => [ 'us-west-2' => [], 'us-east-1' => [], 'eu-west-1' => [], ], ], 'es' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'events' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'firehose' => [ 'endpoints' => [ 'us-west-2' => [], 'us-east-1' => [], 'eu-west-1' => [], ], ], 'gamelift' => [ 'endpoints' => [ 'us-west-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-west-1' => [], ], ], 'glacier' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'iam' => [ 'endpoints' => [ 'aws-global' => [ 'hostname' => 'iam.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], 'isRegionalized' => false, 'partitionEndpoint' => 'aws-global', ], 'importexport' => [ 'endpoints' => [ 'aws-global' => [ 'hostname' => 'importexport.amazonaws.com', 'signatureVersions' => [ 'v2', 'v4', ], 'credentialScope' => [ 'service' => 'IngestionService', 'region' => 'us-east-1', ], ], ], 'isRegionalized' => false, 'partitionEndpoint' => 'aws-global', ], 'inspector' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-west-1' => [], ], ], 'iot' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'credentialScope' => [ 'service' => 'execute-api', ], ], ], 'kinesis' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'kinesisanalytics' => [ 'endpoints' => [ 'us-west-2' => [], 'us-east-1' => [], 'eu-west-1' => [], ], ], 'kms' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'lambda' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'logs' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'machinelearning' => [ 'endpoints' => [ 'us-east-1' => [], 'eu-west-1' => [], ], ], 'marketplacecommerceanalytics' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 'metering.marketplace' => [ 'endpoints' => [ 'us-west-2' => [], 'us-east-1' => [], ], ], 'mobileanalytics' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 'monitoring' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'opsworks' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'rds' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [ 'sslCommonName' => '{service}.{dnsSuffix}', ], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'redshift' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'route53' => [ 'endpoints' => [ 'aws-global' => [ 'hostname' => 'route53.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, ], 'route53domains' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 's3' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [ 'hostname' => 's3-us-west-2.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'ap-south-1' => [], 'ap-southeast-2' => [ 'hostname' => 's3-ap-southeast-2.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'us-west-1' => [ 'hostname' => 's3-us-west-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'ap-southeast-1' => [ 'hostname' => 's3-ap-southeast-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'us-east-2' => [], 'sa-east-1' => [ 'hostname' => 's3-sa-east-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'us-east-1' => [ 'hostname' => 's3.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 's3-external-1' => [ 'hostname' => 's3-external-1.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], 'signatureVersions' => [ 's3', 's3v4', ], ], 'ap-northeast-1' => [ 'hostname' => 's3-ap-northeast-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'eu-central-1' => [], 'eu-west-1' => [ 'hostname' => 's3-eu-west-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], ], 'partitionEndpoint' => 'us-east-1', 'isRegionalized' => true, 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'signatureVersions' => [ 's3v4', ], ], ], 'sdb' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'sa-east-1' => [], 'us-east-1' => [ 'hostname' => 'sdb.amazonaws.com', ], 'ap-northeast-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'servicecatalog' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'sms' => [ 'endpoints' => [ 'ap-southeast-2' => [], 'us-east-1' => [], 'eu-west-1' => [], ], ], 'snowball' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'us-east-2' => [], 'us-east-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'sns' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'sqs' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [ 'sslCommonName' => 'queue.{dnsSuffix}', ], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'sslCommonName' => '{region}.queue.{dnsSuffix}', ], ], 'ssm' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'storagegateway' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'streams.dynamodb' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'credentialScope' => [ 'service' => 'dynamodb', ], ], ], 'sts' => [ 'endpoints' => [ 'ap-northeast-2' => [ 'hostname' => 'sts.ap-northeast-2.amazonaws.com', 'credentialScope' => [ 'region' => 'ap-northeast-2', ], ], 'us-west-2' => [], 'aws-global' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], 'defaults' => [ 'credentialScope' => [ 'region' => 'us-east-1', ], 'hostname' => 'sts.amazonaws.com', ], 'partitionEndpoint' => 'aws-global', ], 'support' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 'swf' => [ 'endpoints' => [ 'ap-northeast-2' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'us-west-1' => [], 'ap-southeast-1' => [], 'us-east-2' => [], 'sa-east-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'waf' => [ 'endpoints' => [ 'aws-global' => [ 'hostname' => 'waf.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, ], 'workspaces' => [ 'endpoints' => [ 'us-west-2' => [], 'ap-southeast-2' => [], 'ap-southeast-1' => [], 'us-east-1' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], ], ], [ 'partition' => 'aws-cn', 'partitionName' => 'AWS China', 'regionRegex' => '^cn\\-\\w+\\-\\d+$', 'dnsSuffix' => 'amazonaws.com.cn', 'defaults' => [ 'hostname' => '{service}.{region}.{dnsSuffix}', 'protocols' => [ 'https', ], 'signatureVersions' => [ 'v4', ], ], 'regions' => [ 'cn-north-1' => [ 'description' => 'China (Beijing)', ], ], 'services' => [ 'autoscaling' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'cloudformation' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'cloudtrail' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'directconnect' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'dynamodb' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'ec2' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'elasticache' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'elasticbeanstalk' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'elasticloadbalancing' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'elasticmapreduce' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'glacier' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'iam' => [ 'endpoints' => [ 'aws-cn-global' => [ 'hostname' => 'iam.cn-north-1.amazonaws.com.cn', 'credentialScope' => [ 'region' => 'cn-north-1', ], ], ], 'isRegionalized' => false, 'partitionEndpoint' => 'aws-cn-global', ], 'kinesis' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'logs' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'monitoring' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'rds' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'redshift' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 's3' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'signatureVersions' => [ 's3v4', ], ], ], 'sns' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], ], 'sqs' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'sslCommonName' => '{region}.queue.{dnsSuffix}', ], ], 'storagegateway' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'streams.dynamodb' => [ 'endpoints' => [ 'cn-north-1' => [], ], 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'credentialScope' => [ 'service' => 'dynamodb', ], ], ], 'sts' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'swf' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], ], ], ],];
