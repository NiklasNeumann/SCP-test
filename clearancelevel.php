<?php
namespace SCP;

class ClearanceLevel extends Enum
{
	private const Unrestricted = 0;
	private const Restricted = 1;
	private const Confidential = 2;
	private const Secret = 3;
	private const TopSecret = 4;
	private const CosmicTopSecret = 5;
}