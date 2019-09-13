<?php

namespace SCP;

class RiskClass extends SplEnum
{
	const __default = self::Notice;
	
	const Notice = 0;
	const Caution = 1;
	const Warning = 2;
	const Danger = 3;
	const Critical = 4;
}