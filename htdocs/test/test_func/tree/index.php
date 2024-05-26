<?php
	/**
	 * 
	 */
	class Node
	{
		public $key, $value;
		public $left, $right;
	}

	$root = new Node();
	$root->key = 5;
	$root->value = 5;
	print_r($root);
	function insert(Node $node, int $key, int $value)
	{
		if($key < $node->key) {
			if (empty($node->left)) {
				$node->left = new Node();
				$node->left->key = $key;
				$node->left->value = $value;
			} else {
				insert($node->left, $key, $value);
			}
		} elseif($key >= $node->key) {
			if (empty($node->right)) {
				$node->right = new Node();
				$node->right->key = $key;
				$node->right->value = $value;
			} else {
				insert($node->right, $key, $value);
			}
		}
	}

	function search(Node $node, int $key)
	{
		if (empty($node)) {
			return null;
		}

		if ($node->key == $key) {
			return $node;
		}

		if ($key < $node->key) {
			return search($node->left, $key);
		} elseif ($key >= $node->key) {
			return search($node->right, $key);
		}
	}

	function getMin(Node $node)
	{
		if (empty($node)) {
			return null;
		}

		if (empty($node->left)) {
			return $node;
		}

		return getMin($node->left);
	}

	function getMax(Node $node)
	{
		if (empty($node)) {
			return null;
		}

		if (empty($node->right)) {
			return $node;
		}

		return getMin($node->right);
	}

	function printTree($node)
	{
		if (empty($node)) {
			return null;
		}

		printTree($node->left);
		echo $node->value;
		echo "<br>";
		printTree($node->right);
	}

	insert($root, 3, 3);
	echo "<br>";
	print_r($root);
	insert($root, 4, 4);
	echo "<br>";
	$test = printTree($root);

	function node_delete($node, int $key)
	{
		if ($node == null) {
			return null;
		} elseif ($key < $node->key) {
			$node->left = node_delete($node->left, $key);
		} elseif ($key > $node->key) {
			$node->right = node_delete($node->right, $key);
		} else {
			if (empty($node->left) || empty($node->right)) {
				//$node = (empty($node->left)) ? $node->right : $node->left;
				if (empty($node->left)) {
					$node->left = $node->right;
				}
				$node = $node->left;
			} else {
				$nodeMaxInLeft = getMax($node->left);
				$node->key = $nodeMaxInLeft->key;
				$node->value = $nodeMaxInLeft->value;
				$node->right = node_delete($node->right, $nodeMaxInLeft->key);
			}
		}
	}

	insert($root, 9, 9);
	insert($root, 6, 6);
	insert($root, 8, 8);
	insert($root, 10, 10);
	print_r($root);

	node_delete($root, 9);
	print_r($root);

?>