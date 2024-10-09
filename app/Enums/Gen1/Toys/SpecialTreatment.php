<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Toys;

use Filament\Support\Contracts\HasLabel;

enum SpecialTreatment: string implements HasLabel
{
    /**
     * Battle Brawlers: pearly white main color with primary color accents
     */
    case PEARL = 'BakuPearl';

    /**
     * New Vestroia: snowy white (with reflection effects) main color with primary color accents
     */
    case FROST = 'BakuFrost';

    /**
     * Battle Brawlers: Attributeless and fully translucid
     */
    case CLEAR = 'BakuClear';

    /**
     * New Vestroia: Very similar to BakuClear
     */
    case CRYSTAL = 'BakuCrystal';

    /**
     * Battle Brawlers: Translucent main plastic
     */
    case TRANSLUCENT = 'Translucent';

    /**
     * Battle Brawlers: primary and secondary colors are swapped
     */
    const FLIP = 'BakuFlip';

    /**
     * New Vestroia: Brushed black spots akin to a battle-damaged look
     */
    const CORE = 'BakuCore';

    /**
     * New Vestroia: Black and gold/bronze
     */
    const BRONZE_ATTACK = 'Bronze Attack';

    /**
     * New Vestroia: Bronze brown matte colored
     */
    const BRONZE = 'Bronze';

    /**
     * Battle Brawlers: Dual attribute
     */
    const MUTATION = 'BakuMutation';

    /**
     * New Vestroia: Translucent, but glow in the dark
     */
    const LYTE = 'BakuLyte';

    /**
     * New Vestroia: Acid green, translucent, but glow in the dark
     */
    const NEON = 'BakuNeon';

    /**
     * New Vestroia: Orange, translucent
     */
    const SOLAR = 'BakuSolar';

    /**
     * New Vestroia: Black body with brushed grey spots
     */
    const STEEL = 'BakuSteel';

    /**
     * Gundalian Invaders: Much darker color than their regular counterpart
     */
    const SHADOW = 'BakuShadow';

    /**
     * Gundalian Invaders: Specific set of colors, with black spots all around
     */
    const GRANITE = 'BakuGranite';

    /**
     * Gundalian Invaders: Color doesn't match the attribute, not much details
     */
    const CAMO = 'BakuCamo';

    /**
     * Gundalian Invaders: Pale light blue main color, with yellow and white accents
     */
    const BLUE = 'BakuBlue';

    /**
     * Mechtanium Surge: Dark grey main color, with attribute accents (white for Darkus)
     */
    const ECLIPSE = 'BakuEclipse';

    /**
     * New Vestroia: Spins as it opens (Alpha Percival, Cyclone/Hyper Dragonoid, etc.)
     */
    const CYCLONE = 'Cyclone';

    /**
     * Battle Brawlers: Two magnets, so two sides (Preyas II, etc.)
     */
    const DOUBLE_MAGNET = 'Double Magnet';

    /**
     * New Vestroia: Flashes light as it opens (Moonlit Monarus, Flare Wilda, etc.)
     */
    const LIGHT_UP = 'Light Up';

    /**
     * New Vestroia: Throws a dice to determine its G-Power (Mystic Elico, etc.)
     */
    const DICE_THROWER = 'Dice Thrower';

    /**
     * New Vestroia: Spins as it opens (Orbit Helios, etc.)
     */
    const ORBIT = 'Orbit';

    /**
     * New Vestroia: Spins as it opens (Neo Dragonoid, Percival, etc.)
     */
    const VORTEX = 'Vortex';

    /**
     * New Vestroia: Spins as it opens (Spin Dragonoid, Spin Ravenoid, etc.)
     */
    const SPIN = 'Spin';

    /**
     * Battle Brawlers: Metal ring (Dual Hydranoid, Delta Percival, etc.)
     */
    const HEAVY_METAL = 'Heavy Metal';

    /**
     * Battle Brawlers: Wheel changes the attribute as it opens (Preyas, etc.)
     */
    const ATTRIBUTE_WHEEL = 'Attribute Wheel';

    /**
     * New Vestroia: Wheel determines the G-Power as it opens (Elfin, etc.)
     */
    const G_POWER_WHEEL = 'G-Power Wheel';

    /**
     * Battle Brawlers: A bump on the back and a moving part on the head allowing it to jump (Skyress, etc.)
     */
    const JUMPING = 'Jumping';

    /**
     * New Vestroia: Sort of spins like a top as it moves onto the gate cards (Turbine Dragonoid, etc.)
     */
    const TURBINE = 'Turbine';

    /**
     * New Vestroia: Spins as it opens (Ultra Dragonoid Typhoon, etc.)
     */
    const TYPHOON = 'Typhoon';

    /**
     * Gundalian Invaders: Different textures on the outside (Rubanoid, Avoir, etc.)
     */
    const EXO_SKIN = 'Exo Skin';

    /**
     * Gundalian Invaders: Chrome-plated parts (Lumino Dragonoid, etc.)
     */
    const METALIX = 'BakuMetalix';

    /**
     * Gundaliand Invaders: Lights up and might have sound too (Apexeon, etc.)
     */
    const BOLT = 'BakuBolt';

    /**
     * Gundalian Invaders: Spins as it opens (Gyrazor, etc.)
     */
    const BAKU_CYCLONE = 'BakuCyclone';

    /**
     * Gundalian Invaders: Throws a dice to determine its G-Power (Merlix, etc.)
     */
    const CHANCE = 'BakuChance';

    /**
     * Gundalian Invaders: Shakes/quakes it opens (Quakix Gorem, etc.)
     */
    const TREMOR = 'BakuTremor';

    /**
     * Gundalian Invaders: Bakugan that extend horizontally as they open (Longfly, etc.)
     */
    const VICE = 'BakuVice';

    /**
     * Gundalian Invaders: Sort of spins like a top as it moves on the gate cards (Ziperator, etc.)
     */
    const ZOOM = 'BakuZoom';

    /**
     * Gundalian Invaders: Bakugan that extend vertically as they open (Contestir, etc.)
     */
    const STAND = 'BakuStand';

    /**
     * Mechtanium Surge: Spins as it opens (Cyclone Percival, etc.)
     */
    const BAKU_BLITZ = 'BakuBlitz';

    /**
     * Mechtanium Surge: Digital camouflage design with up to 3 colors at a time (Skytruss, etc.)
     */
    const CAMO_SURGE = 'Camo Surge';

    /**
     * Mechtanium Surge: Camo design, dichromatic with a striped (front to back) design
     */
    const CYCLONE_STRIKE = 'Cyclone Strike';

    /**
     * Mechtanium Surge: The successor of Bronze Attack, Bakugan sport gold accents (or silver for Aquos) and darker base colors (Jaakor, etc.)
     */
    const GOLD = 'BakuGold';

    /**
     * Mechtanium Surge: Camo Bakugan with a shade of grey as the primary colors and accent color paint applications in wavy bands or camouflage-like blotches (Mutant Helios, etc.)
     */
    const LAVA_STORM = 'Lava Storm';

    /**
     * Mechtanium Surge: Bakugan with a special gimmick that lets them split in half to mix-and-match with other mutant (Mercury Dragonoid, etc.)
     */
    const MUTANT = 'BakuMutant';

    /**
     * Mechtanium Surge: Completely translucent Bakugan, unlike regular translucent from Mechtanium Surge that can still have metal pieces (Mutabrid, etc.)
     */
    const PHANTOM = 'BakuPhantom';

    /**
     * Mechtanium Surge: Similar to pearl, as they have a white/cream body with the primary attribute color as their accent color
     */
    const SPARK = 'BakuSpark';

    /**
     * Mechtanium Surge: Target exclusive and look similar to "Crimson & Pearl" or "Evil Twin"
     */
    const SURGE = 'BakuSurge';

    /**
     * Mechtanium Surge: The MS equivalent to BakuChance (Meta Dragonoid, etc.)
     */
    const TACTIX = 'BakuTactix';

    /**
     * Mechtanium Surge: Parts (otherwise painted silver) of the Bakugan are made of diecast metal
     */
    const DIECAST = 'Diecast';

    /**
     * Mechtanium Surge: Bakugan that leap through the air when opened (Fusion Dragonoid, etc.)
     */
    const SKY_RAIDER = 'Sky Raider';

    /**
     * BakuTech: Fully metallic Bakugan
     */
    const BAKU_METALLIC = 'BakuMetallic';

    /**
     * BakuTech: Sky Blue as the primary body color, with white accent (Rise Dragaon, etc.)
     */
    const BLUE_BLAZE = 'Blue Blaze';

    public function getLabel(): ?string
    {
        return $this->value;
    }

    public function requiresSecondaryAttribute(): bool
    {
        return $this->isDualAttribute();
    }

    public function isDualAttribute(): bool
    {
        return in_array($this, [
            self::MUTATION,
            self::MUTANT,
        ]);
    }

    public function isClear(): bool
    {
        return in_array($this, [
            self::CLEAR,
            self::CRYSTAL,
        ]);
    }

    public function isPearl(): bool
    {
        return in_array($this, [
            self::PEARL,
            self::FROST,
            self::SPARK,
        ]);
    }

    public function isTranslucent(): bool
    {
        return in_array($this, [
            self::TRANSLUCENT,
            self::LYTE,
            self::NEON,
            self::SOLAR,
            self::PHANTOM,
        ]);
    }

    public function isStealth(): bool
    {
        return in_array($this, [
            self::SHADOW,
            self::GRANITE,
            self::CAMO,
            self::BLUE,
        ]);
    }

    public function isSpecialAttack(): bool
    {
        return $this->isSuperAssault() || in_array($this, [
            self::CYCLONE,
            self::DOUBLE_MAGNET,
            self::LIGHT_UP,
            self::DICE_THROWER,
            self::ORBIT,
            self::VORTEX,
            self::SPIN,
            self::HEAVY_METAL,
            self::ATTRIBUTE_WHEEL,
            self::G_POWER_WHEEL,
            self::JUMPING,
        ]);
    }

    public function isSuperAssault(): bool
    {
        return in_array($this, [
            self::BOLT,
            self::BAKU_CYCLONE,
            self::CHANCE,
            self::TREMOR,
            self::STAND,
            self::VICE,
            self::ZOOM,
        ]);
    }

    public function spins(): bool
    {
        return in_array($this, [
            self::CYCLONE,
            self::ORBIT,
            self::VORTEX,
            self::SPIN,
            self::TYPHOON,
            self::BAKU_CYCLONE,
            self::BAKU_BLITZ,
        ]);
    }

    public function vibrates(): bool
    {
        return in_array($this, [
            self::TURBINE,
            self::TREMOR,
            self::ZOOM,
        ]);
    }

    public function hasMetal(): bool
    {
        return in_array($this, [
            self::HEAVY_METAL,
            self::METALIX,
            self::DIECAST,
            self::BAKU_METALLIC,
        ]);
    }

    public function lightsUp(): bool
    {
        return in_array($this, [
            self::LIGHT_UP,
            self::BOLT,
        ]);
    }

    public function throwsDice(): bool
    {
        return in_array($this, [
            self::DICE_THROWER,
            self::CHANCE,
        ]);
    }

    public function isCamo(): bool
    {
        return in_array($this, [
            self::CAMO,
            self::CAMO_SURGE,
            self::CYCLONE_STRIKE,
            self::LAVA_STORM,
        ]);
    }

    public function isGolden(): bool
    {
        return in_array($this, [
            self::BRONZE_ATTACK,
            self::GOLD,
        ]);
    }
}
