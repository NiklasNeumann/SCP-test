<?php

namespace SCP;

class RiskClass extends Enum
{
	private const Notice = 0;
	private const Caution = 1;
	private const Warning = 2;
	private const Danger = 3;
	private const Critical = 4;
}