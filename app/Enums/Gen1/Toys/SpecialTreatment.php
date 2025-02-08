<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Toys;

use App\Enums\Concerns\BackedEnum;
use Filament\Support\Contracts\HasLabel;

enum SpecialTreatment: string implements HasLabel
{
    use BackedEnum;

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
    case FLIP = 'BakuFlip';

    /**
     * New Vestroia: Brushed black spots akin to a battle-damaged look
     */
    case CORE = 'BakuCore';

    /**
     * New Vestroia: Black and gold/bronze
     */
    case BRONZE_ATTACK = 'Bronze attack';

    /**
     * New Vestroia: Bronze brown matte colored
     */
    case BRONZE = 'Bronze';

    /**
     * Battle Brawlers: Dual attribute
     */
    case MUTATION = 'BakuMutation';

    /**
     * New Vestroia: Translucent, but glow in the dark
     */
    case LYTE = 'BakuLyte';

    /**
     * New Vestroia: Acid green, translucent, but glow in the dark
     */
    case NEON = 'BakuNeon';

    /**
     * New Vestroia: Orange, translucent
     */
    case SOLAR = 'BakuSolar';

    /**
     * New Vestroia: Black body with brushed grey spots
     */
    case STEEL = 'BakuSteel';

    /**
     * Gundalian Invaders: Much darker color than their regular counterpart
     */
    case SHADOW = 'BakuShadow';

    /**
     * Gundalian Invaders: Specific set of colors, with black spots all around
     */
    case GRANITE = 'BakuGranite';

    /**
     * Gundalian Invaders: Color doesn't match the attribute, not much details
     */
    case CAMO = 'BakuCamo';

    /**
     * Gundalian Invaders: Pale light blue main color, with yellow and white accents
     */
    case BLUE = 'BakuBlue';

    /**
     * Mechtanium Surge: Dark grey main color, with attribute accents (white for Darkus)
     */
    case ECLIPSE = 'BakuEclipse';

    /**
     * New Vestroia: Spins as it opens (Alpha Percival, Cyclone/Hyper Dragonoid, etc.)
     */
    case CYCLONE = 'Cyclone';

    /**
     * Battle Brawlers: Two magnets, so two sides (Preyas II, etc.)
     */
    case DOUBLE_MAGNET = 'Double Magnet';

    /**
     * New Vestroia: Flashes light as it opens (Moonlit Monarus, Flare Wilda, etc.)
     */
    case LIGHT_UP = 'Light Up';

    /**
     * New Vestroia: Throws a dice to determine its G-Power (Mystic Elico, etc.)
     */
    case DICE_THROWER = 'Dice Thrower';

    /**
     * New Vestroia: Spins as it opens (Orbit Helios, etc.)
     */
    case ORBIT = 'Orbit';

    /**
     * New Vestroia: Spins as it opens (Neo Dragonoid, Percival, etc.)
     */
    case VORTEX = 'Vortex';

    /**
     * New Vestroia: Spins as it opens (Spin Dragonoid, Spin Ravenoid, etc.)
     */
    case SPIN = 'Spin';

    /**
     * Battle Brawlers: Metal ring (Dual Hydranoid, Delta Percival, etc.)
     */
    case HEAVY_METAL = 'Heavy Metal';

    /**
     * Battle Brawlers: Wheel changes the attribute as it opens (Preyas, etc.)
     */
    case ATTRIBUTE_WHEEL = 'Attribute Wheel';

    /**
     * New Vestroia: Wheel determines the G-Power as it opens (Elfin, etc.)
     */
    case G_POWER_WHEEL = 'G-Power Wheel';

    /**
     * Battle Brawlers: A bump on the back and a moving part on the head allowing it to jump (Skyress, etc.)
     */
    case JUMPING = 'Jumping';

    /**
     * New Vestroia: Sort of spins like a top as it moves onto the gate cards (Turbine Dragonoid, etc.)
     */
    case TURBINE = 'Turbine';

    /**
     * New Vestroia: Spins as it opens (Ultra Dragonoid Typhoon, etc.)
     */
    case TYPHOON = 'Typhoon';

    /**
     * Gundalian Invaders: Different textures on the outside (Rubanoid, Avoir, etc.)
     */
    case EXO_SKIN = 'Exo Skin';

    /**
     * Gundalian Invaders: Chrome-plated parts (Lumino Dragonoid, etc.)
     */
    case METALLIX = 'BakuMetallix';

    /**
     * Gundaliand Invaders: Lights up and might have sound too (Apexeon, etc.)
     */
    case BOLT = 'BakuBolt';

    /**
     * Gundalian Invaders: Spins as it opens (Gyrazor, etc.)
     */
    case BAKU_CYCLONE = 'BakuCyclone';

    /**
     * Gundalian Invaders: Throws a dice to determine its G-Power (Merlix, etc.)
     */
    case CHANCE = 'BakuChance';

    /**
     * Gundalian Invaders: Shakes/quakes it opens (Quakix Gorem, etc.)
     */
    case TREMOR = 'BakuTremor';

    /**
     * Gundalian Invaders: Bakugan that extend horizontally as they open (Longfly, etc.)
     */
    case VICE = 'BakuVice';

    /**
     * Gundalian Invaders: Sort of spins like a top as it moves on the gate cards (Ziperator, etc.)
     */
    case ZOOM = 'BakuZoom';

    /**
     * Gundalian Invaders: Bakugan that extend vertically as they open (Contestir, etc.)
     */
    case STAND = 'BakuStand';

    /**
     * Mechtanium Surge: Spins as it opens (Cyclone Percival, etc.)
     */
    case BAKU_BLITZ = 'BakuBlitz';

    /**
     * Mechtanium Surge: Digital camouflage design with up to 3 colors at a time (Skytruss, etc.)
     */
    case CAMO_SURGE = 'Camo Surge';

    /**
     * Mechtanium Surge: Camo design, dichromatic with a striped (front to back) design
     */
    case CYCLONE_STRIKE = 'Cyclone Strike';

    /**
     * Mechtanium Surge: The successor of Bronze Attack, Bakugan sport gold accents (or silver for Aquos) and darker base colors (Jaakor, etc.)
     */
    case GOLD = 'BakuGold';

    /**
     * Mechtanium Surge: Camo Bakugan with a shade of grey as the primary colors and accent color paint applications in wavy bands or camouflage-like blotches (Mutant Helios, etc.)
     */
    case LAVA_STORM = 'Lava Storm';

    /**
     * Mechtanium Surge: Bakugan with a special gimmick that lets them split in half to mix-and-match with other mutant (Mercury Dragonoid, etc.)
     */
    case MUTANT = 'BakuMutant';

    /**
     * Mechtanium Surge: Completely translucent Bakugan, unlike regular translucent from Mechtanium Surge that can still have metal pieces (Mutabrid, etc.)
     */
    case PHANTOM = 'BakuPhantom';

    /**
     * Mechtanium Surge: Similar to pearl, as they have a white/cream body with the primary attribute color as their accent color
     */
    case SPARK = 'BakuSpark';

    /**
     * Mechtanium Surge: Target exclusive and look similar to "Crimson & Pearl" or "Evil Twin"
     */
    case SURGE = 'BakuSurge';

    /**
     * Mechtanium Surge: The MS equivalent to BakuChance (Meta Dragonoid, etc.)
     */
    case TACTIX = 'BakuTactix';

    /**
     * Mechtanium Surge: Parts (otherwise painted silver) of the Bakugan are made of diecast metal
     */
    case DIECAST = 'Diecast';

    /**
     * Mechtanium Surge: Bakugan that leap through the air when opened (Fusion Dragonoid, etc.)
     */
    case SKY_RAIDER = 'Sky Raider';

    /**
     * BakuTech: Fully metallic Bakugan
     */
    case BAKU_METALLIC = 'BakuMetallic';

    /**
     * BakuTech: Sky Blue as the primary body color, with white accent (Rise Dragaon, etc.)
     */
    case BLUE_BLAZE = 'Blue Blaze';

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

    public function isSpecialFX(): bool
    {
        return $this->isSuperAssault() || $this->isSpecialAttack();
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

    public function isSpecialAttack(): bool
    {
        return in_array($this, [
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
            self::METALLIX,
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
