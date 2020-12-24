<?php
$connectionString = "couchbase://localhost";
$options = new \Couchbase\ClusterOptions();
$options->credentials("user", "password");
$cluster = new \Couchbase\Cluster($connectionString, $options);
$bucket = $cluster->bucket("test");
$collection = $bucket->defaultCollection();
$upsertResult = $collection->upsert("my-document", ["name" => "mike"]);
?>
