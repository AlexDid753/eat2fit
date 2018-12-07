<?php

return [
	/**
	 * The name of the application.
	 */
	'name' => 'eat2fit',

	/**
	 * The environment to use by default.
	 */
	'default' => 'staging',

	/**
	 * Environments/servers definiti`ons
	 */
	'environments' => [
		'staging' => [
			/**
			 * SSH url to the server.
			 */
			'server' => 'eat.staging',

			/**
			 * The path on the remote server where the application should be deployed.
			 */
			'deploy_to' => '/home/app/staging',

			/**
			 * URL to the repository.
			 */
			'repo_url' => 'git@gitlab.molinos.ru:support/eat2fit.git',

			/**
			 * The branch name to be deployed from SCM.
			 */
			'repo_branch' => 'develop',

			/**
			 * Default commit hash
			 */
			'commit_hash' => 'HEAD',

			/**
			 * The subtree of the repository to deploy.
			 */
			'repo_tree' => '',

			/**
			 * Listed files will be symlinked into each release directory during deployment.
			 */
			'linked_files' => ['.env'],

			/**
			 * Listed directories will be symlinked into the release directory during deployment.
			 */
			'linked_dirs' => ['storage/logs', 'storage/app/public'],

			/**
			 * The last n releases are kept for possible rollbacks.
			 */
			'keep_releases' => 5,

			/**
			 * Temporary directory used during deployments to store data.
			 */
			'tmp_dir' => '/tmp',
		]
	],
];
