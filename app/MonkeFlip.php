<?php
$abiMonkeFlip = `{
	"compiler": {
		"version": "0.8.7+commit.e28d00a7"
	},
	"language": "Solidity",
	"output": {
		"abi": [
			{
				"inputs": [
					{
						"internalType": "contract Utilisateur",
						"name": "_user",
						"type": "address"
					},
					{
						"internalType": "string",
						"name": "_titre",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_description",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_etat",
						"type": "string"
					},
					{
						"internalType": "uint256",
						"name": "_prix",
						"type": "uint256"
					},
					{
						"internalType": "string",
						"name": "_modeAcheminement",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_localisation",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_categorie",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_urlImage",
						"type": "string"
					}
				],
				"stateMutability": "nonpayable",
				"type": "constructor"
			},
			{
				"inputs": [],
				"name": "categorie",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [
					{
						"internalType": "uint256",
						"name": "",
						"type": "uint256"
					}
				],
				"name": "categories",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "description",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "etat",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "localisation",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "modeAcheminement",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [
					{
						"internalType": "string",
						"name": "_titre",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_description",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_etat",
						"type": "string"
					},
					{
						"internalType": "uint256",
						"name": "_prix",
						"type": "uint256"
					},
					{
						"internalType": "string",
						"name": "_modeAcheminement",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_categorie",
						"type": "string"
					},
					{
						"internalType": "string",
						"name": "_localisation",
						"type": "string"
					}
				],
				"name": "modifierAnnonce",
				"outputs": [],
				"stateMutability": "nonpayable",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "prix",
				"outputs": [
					{
						"internalType": "uint256",
						"name": "",
						"type": "uint256"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [
					{
						"internalType": "address",
						"name": "_userVendu",
						"type": "address"
					}
				],
				"name": "setVendu",
				"outputs": [],
				"stateMutability": "nonpayable",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "titre",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "urlImage",
				"outputs": [
					{
						"internalType": "string",
						"name": "",
						"type": "string"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "user",
				"outputs": [
					{
						"internalType": "contract Utilisateur",
						"name": "",
						"type": "address"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "userVendu",
				"outputs": [
					{
						"internalType": "address",
						"name": "",
						"type": "address"
					}
				],
				"stateMutability": "view",
				"type": "function"
			},
			{
				"inputs": [],
				"name": "vendu",
				"outputs": [
					{
						"internalType": "bool",
						"name": "",
						"type": "bool"
					}
				],
				"stateMutability": "view",
				"type": "function"
			}
		],
		"devdoc": {
			"kind": "dev",
			"methods": {},
			"version": 1
		},
		"userdoc": {
			"kind": "user",
			"methods": {},
			"version": 1
		}
	},
	"settings": {
		"compilationTarget": {
			"MonkeFlip/MonkeBay.sol": "Annonce"
		},
		"evmVersion": "london",
		"libraries": {},
		"metadata": {
			"bytecodeHash": "ipfs"
		},
		"optimizer": {
			"enabled": false,
			"runs": 200
		},
		"remappings": []
	},
	"sources": {
		"MonkeFlip/MonkeBay.sol": {
			"keccak256": "0x7695df3ecff767a1440a40f8bc3dbd07bf8281263710d1819b1e5e52db893a09",
			"license": "UNLICENSED",
			"urls": [
				"bzz-raw://5dd2b2a6e745bee85e9d88d82babc2a96fd022e9dfea6fc90d9c1d7bb8e0a03f",
				"dweb:/ipfs/QmVejfkaBFDHzgRb6JkWN3qejGpFjr89aM2n9FFiGhg2vR"
			]
		}
	},
	"version": 1
}`
?>