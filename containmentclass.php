<?php

namespace SCP;

class ContainmentClass extends Splenum
{
	const __default = self::Pending;
	
	const Pending = 0;
	const Save = 1;
	const Euclid = 2;
	const Keter = 3;
	const Neutralized = 4;
	const Explained = 5;
	const Esoteric = 6;
}