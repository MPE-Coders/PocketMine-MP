<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
 */

declare(strict_types=1);

namespace pocketmine\item;

use pocketmine\utils\EnumTrait;
use pocketmine\world\sound\FireworkExplosionSound;
use pocketmine\world\sound\FireworkLargeExplosionSound;
use pocketmine\world\sound\Sound;

/**
 * This doc-block is generated automatically, do not modify it manually.
 * This must be regenerated whenever registry members are added, removed or changed.
 * @see build/generate-registry-annotations.php
 * @generate-registry-docblock
 *
 * @method static FireworkRocketType BURST()
 * @method static FireworkRocketType CREEPER()
 * @method static FireworkRocketType LARGE_BALL()
 * @method static FireworkRocketType SMALL_BALL()
 * @method static FireworkRocketType STAR()
 */
final class FireworkRocketType{
	use EnumTrait {
		__construct as Enum___construct;
	}

	protected static function setup() : void{
		self::registerAll(
			new self("small_ball", new FireworkExplosionSound()),
			new self("large_ball", new FireworkLargeExplosionSound()),
			new self("star", new FireworkExplosionSound()),
			new self("creeper", new FireworkExplosionSound()),
			new self("burst", new FireworkExplosionSound()),
		);
	}

	private function __construct(
		string $enumName,
		private Sound $sound
	){
		$this->Enum___construct($enumName);
	}

	public function getSound() : Sound{
		return $this->sound;
	}
}
