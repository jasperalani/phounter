<?php

declare( strict_types=1 );

namespace Phounter;

interface CounterInterface {
	/**
	 * CounterInterface constructor.
	 *
	 * @param int $count The count to reach.
	 */
	public function __construct( int $count );

	/**
	 * Increment the internal counter by 1 or the argument
	 *
	 * @param int $amount
	 *
	 * @return mixed
	 */
	public function count( int $amount = 1 );
}

class Counter implements CounterInterface {

	public int $count = 0;
	public int $counter = 0;

	public function __construct( int $count ) {
		$this->count = $count <= 0 ? 0 : $count;
	}

	public function count( int $amount = 1 ): string {
		if ( $this->count !== 0 && $this->counter < ( $this->count - 1 ) ) {
			$this->counter += $amount;
		} else {
			return 'finished';
		}

		return "{$this->count}";
	}
}