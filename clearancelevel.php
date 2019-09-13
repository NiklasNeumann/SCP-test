<?php

namespace SCP;

class ClearanceLevel extends Splenum
{
	const __default = self::Unrestricted;
	
	const Unrestricted = 0;
	const Restricted = 1;
	const Confidential = 2;
	const Secret = 3;
	const TopSecret = 4;
	const CosmicTopSecret = 5;
}