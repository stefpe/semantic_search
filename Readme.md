
## Build PHP Protobuf client
- composer require google/protobuf grpc/grpc
- protoc --php_out=./grpc/ --grpc_out=./grpc/ --plugin=protoc-gen-grpc=/opt/homebrew/bin/grpc_php_plugin ./config/contextionary.proto
- Adjust comoser file to include the generated files:
-            "Contextionary\\": "grpc/Contextionary/",
            "GPBMetadata\\": "grpc/GPBMetadata/"
- Regenerate autoload files composer dump-autoload

## Check if OpenSearch KNN plugin is installed
- curl -s http://localhost:9200/_cat/plugins | grep knn