<?php


const MOVEGROUP_BASE_START = 0;
const MOVEGROUP_ATTACK_START = 0x30/2;
const MOVEGROUP_ATTACKSPEC_START = 0x48/2;
const MOVEGROUP_ATTACKSPEC_END = 0x6C/2;
const MOVEGROUP_HIT_START = 0x70/2;


const OLF_USETILEFLAGS = 1 << 4;
const OBJLST_FLAGS = [
	0 => "OLF_BIT0",
	1 => "OLF_BIT1",
	2 => "OLF_BIT2",
	3 => "OLF_BIT3",
	4 => "OLF_USETILEFLAGS",
	5 => "OLF_XFLIP",
	6 => "OLF_YFLIP",
	7 => "OLF_NOBUF",
];

const OBJLST_ROMFLAGS = [
	6 => "OLR_XFLIP",
	7 => "OLR_YFLIP",
];

const PLFLAGS3 = [
	0 => "PF3_HEAVYHIT",
	1 => "PF3_FIRE",
	2 => "PF3_HITLOW",
	3 => "PF3_OVERHEAD",
	4 => "PF3_LASTHIT",
	5 => "PF3_HALFSPEED",
	6 => "PF3_SUPERALT",
	7 => "PF3_LIGHTHIT",
];
const HIT_ANIMS = [
	"\$00",
	"HITTYPE_GUARDBREAK_G",
	"HITTYPE_GUARDBREAK_A",
	"HITTYPE_HIT_MID0",
	"HITTYPE_HIT_MID1",
	"HITTYPE_HIT_LOW",
	"HITTYPE_DROP_CH",
	"HITTYPE_DROP_A",
	"HITTYPE_DROP_MAIN",
	"HITTYPE_HIT_MULTI0",
	"HITTYPE_HIT_MULTI1",
	"HITTYPE_HIT_MULTIGS",
	"HITTYPE_DROP_DB_A",
	"HITTYPE_DROP_DB_G",
	"HITTYPE_DROP_SWOOPUP",
	"HITTYPE_THROW_END",
	"HITTYPE_THROW_START",
	"HITTYPE_THROW_ROTU",
	"HITTYPE_THROW_ROTL",
	"HITTYPE_THROW_ROTD",
	"HITTYPE_THROW_ROTR",
	0x81 => "HITTYPE_DUMMY"
];

const CHAR_NAMES = [
	"KYO",
	"DAIMON",
	"TERRY",
	"ANDY",
	"RYO",
	"ROBERT",
	"ATHENA",
	"MAI",
	"LEONA",
	"GEESE",
	"KRAUSER",
	"MRBIG",
	"IORI",
	"MATURE",
	"CHIZURU",
	"GOENITZ",
	"MRKARATE",
	"OIORI",
	"OLEONA",
	"KAGURA",
];

const MOVES_GLOBAL = [
	"MOVE_SHARED_NONE",
	"MOVE_SHARED_IDLE",
	"MOVE_SHARED_WALK_F",
	"MOVE_SHARED_WALK_B",
	"MOVE_SHARED_CROUCH",
	"MOVE_SHARED_JUMP_N",
	"MOVE_SHARED_JUMP_F",
	"MOVE_SHARED_JUMP_B",
	"MOVE_SHARED_BLOCK_G",
	"MOVE_SHARED_BLOCK_C",
	"MOVE_SHARED_BLOCK_A",
	"MOVE_SHARED_RUN_F",
	"MOVE_SHARED_HOP_B",
	"MOVE_SHARED_CHARGEMETER",
	"MOVE_SHARED_TAUNT",
	"MOVE_SHARED_ROLL_F",
	"MOVE_SHARED_ROLL_B",
	"MOVE_SHARED_WAKEUP",
	"MOVE_SHARED_DIZZY",
	"MOVE_SHARED_WIN_A",
	"MOVE_SHARED_WIN_B",
	"MOVE_SHARED_LOST_TIMEOVER",
	"MOVE_SHARED_INTRO",
	"MOVE_SHARED_INTRO_SPEC",
	"MOVE_SHARED_PUNCH_L",
	"MOVE_SHARED_PUNCH_H",
	"MOVE_SHARED_KICK_L",
	"MOVE_SHARED_KICK_H",
	"MOVE_SHARED_PUNCH_CL",
	"MOVE_SHARED_PUNCH_CH",
	"MOVE_SHARED_KICK_CL",
	"MOVE_SHARED_KICK_CH",
	"MOVE_SHARED_ATTACK_G",
	"MOVE_SHARED_PUNCH_A",
	"MOVE_SHARED_KICK_A",
	"MOVE_SHARED_ATTACK_A",
	"MOVE_SPEC_0_L",
	"MOVE_SPEC_0_H",
	"MOVE_SPEC_1_L",
	"MOVE_SPEC_1_H",
	"MOVE_SPEC_2_L",
	"MOVE_SPEC_2_H",
	"MOVE_SPEC_3_L",
	"MOVE_SPEC_3_H",
	"MOVE_SPEC_4_L",
	"MOVE_SPEC_4_H",
	"MOVE_SPEC_5_L",
	"MOVE_SPEC_5_H",
	"MOVE_SPEC_6_L",
	"MOVE_SPEC_6_H",
	"MOVE_SUPER_0_S",
	"MOVE_SUPER_0_D",
	"MOVE_SUPER_1_S",
	"MOVE_SUPER_1_D",
	"MOVE_SHARED_THROW_G",
	"MOVE_SHARED_THROW_A",
	"MOVE_SHARED_POST_BLOCKSTUN",
	"MOVE_SHARED_GUARDBREAK_G",
	"MOVE_SHARED_GUARDBREAK_A",
	"MOVE_SHARED_HIT0MID",
	"MOVE_SHARED_HIT1MID",
	"MOVE_SHARED_HITLOW",
	"MOVE_SHARED_DROP_MAIN",
	"MOVE_SHARED_THROW_END_A",
	"MOVE_SHARED_DROP_DBG",
	"MOVE_SHARED_HIT_SWOOPUP",
	"MOVE_SHARED_DROP_CH",
	"MOVE_SHARED_BACKJUMP_REC_A",
	"MOVE_SHARED_HIT_MULTIMID0",
	"MOVE_SHARED_HIT_MULTIMID1",
	"MOVE_SHARED_HIT_MULTIGS",
	"MOVE_SHARED_THROW_END_G",
	"MOVE_SHARED_THROW_START",
	"MOVE_SHARED_THROW_ROTU",
	"MOVE_SHARED_THROW_ROTL",
	"MOVE_SHARED_THROW_ROTD",
	"MOVE_SHARED_THROW_ROTR",
];

const MOVES_CHAR = [
[
"MOVE_KYO_ARA_KAMI_L",
"MOVE_KYO_ARA_KAMI_H",
"MOVE_KYO_ONIYAKI_L",
"MOVE_KYO_ONIYAKI_H",
"MOVE_KYO_RED_KICK_L",
"MOVE_KYO_RED_KICK_H",
"MOVE_KYO_KOTOTSUKI_YOU_L",
"MOVE_KYO_KOTOTSUKI_YOU_H",
"MOVE_KYO_KAI_L",
"MOVE_KYO_KAI_H",
"MOVE_KYO_NUE_TUMI_L",
"MOVE_KYO_NUE_TUMI_H",
"MOVE_KYO_SPEC_6_L",
"MOVE_KYO_SPEC_6_H",
"MOVE_KYO_URA_OROCHI_NAGI_S",
"MOVE_KYO_URA_OROCHI_NAGI_D",
"MOVE_KYO_SUPER_1_S",
"MOVE_KYO_SUPER_1_D",
],[
"MOVE_DAIMON_JIRAI_SHIN",
"MOVE_DAIMON_JIRAI_SHIN_FAKE",
"MOVE_DAIMON_CHOU_UKEMI_L",
"MOVE_DAIMON_CHOU_UKEMI_H",
"MOVE_DAIMON_CHOU_OOSOTO_GARI_L",
"MOVE_DAIMON_CHOU_OOSOTO_GARI_H",
"MOVE_DAIMON_CLOUD_TOSSER",
"MOVE_DAIMON_STUMP_THROW",
"MOVE_DAIMON_HEAVEN_DROP_L",
"MOVE_DAIMON_HEAVEN_DROP_H",
"MOVE_DAIMON_SPEC_5_L",
"MOVE_DAIMON_SPEC_5_H",
"MOVE_DAIMON_SPEC_6_L",
"MOVE_DAIMON_SPEC_6_H",
"MOVE_DAIMON_HEAVEN_HELL_DROP_S",
"MOVE_DAIMON_HEAVEN_HELL_DROP_D",
"MOVE_DAIMON_SUPER_1_S",
"MOVE_DAIMON_SUPER_1_D",
],[
"MOVE_TERRY_POWER_WAVE_L",
"MOVE_TERRY_POWER_WAVE_H",
"MOVE_TERRY_BURN_KNUCKLE_L",
"MOVE_TERRY_BURN_KNUCKLE_H",
"MOVE_TERRY_CRACK_SHOT_L",
"MOVE_TERRY_CRACK_SHOT_H",
"MOVE_TERRY_RISING_TACKLE_L",
"MOVE_TERRY_RISING_TACKLE_H",
"MOVE_TERRY_POWER_DUNK_L",
"MOVE_TERRY_POWER_DUNK_H",
"MOVE_TERRY_SPEC_5_L",
"MOVE_TERRY_SPEC_5_H",
"MOVE_TERRY_SPEC_6_L",
"MOVE_TERRY_SPEC_6_H",
"MOVE_TERRY_POWER_GEYSER_S",
"MOVE_TERRY_POWER_GEYSER_D",
"MOVE_TERRY_POWER_GEYSER_E",
"MOVE_TERRY_SUPER_1_D",
],[
"MOVE_ANDY_HI_SHO_KEN_L",
"MOVE_ANDY_HI_SHO_KEN_H",
"MOVE_ANDY_ZAN_EI_KEN_L",
"MOVE_ANDY_ZAN_EI_KEN_H",
"MOVE_ANDY_KU_HA_DAN_L",
"MOVE_ANDY_KU_HA_DAN_H",
"MOVE_ANDY_SHO_RYU_DAN_L",
"MOVE_ANDY_SHO_RYU_DAN_H",
"MOVE_ANDY_GEKI_HEKI_HAI_SUI_SHO_L",
"MOVE_ANDY_GEKI_HEKI_HAI_SUI_SHO_H",
"MOVE_ANDY_GENEI_SHIRANUI_L",
"MOVE_ANDY_GENEI_SHIRANUI_H",
"MOVE_ANDY_SHIMO_AGITO",
"MOVE_ANDY_UWA_AGITO",
"MOVE_ANDY_CHO_REPPA_DAN_S",
"MOVE_ANDY_CHO_REPPA_DAN_D",
"MOVE_ANDY_SUPER_1_S",
"MOVE_ANDY_SUPER_1_D",
],[
"MOVE_RYO_KO_OU_KEN_L",
"MOVE_RYO_KO_OU_KEN_H",
"MOVE_RYO_MOU_KO_RAI_JIN_GOU_L",
"MOVE_RYO_MOU_KO_RAI_JIN_GOU_H",
"MOVE_RYO_HIEN_SHIPPU_KYAKU_L",
"MOVE_RYO_HIEN_SHIPPU_KYAKU_H",
"MOVE_RYO_KO_HOU_L",
"MOVE_RYO_KO_HOU_H",
"MOVE_RYO_KYOKUKEN_RYU_RENBU_KEN_L",
"MOVE_RYO_KYOKUKEN_RYU_RENBU_KEN_H",
"MOVE_RYO_KO_HOU_EL",
"MOVE_RYO_KO_HOU_EH",
"MOVE_RYO_SPEC_6_L",
"MOVE_RYO_SPEC_6_H",
"MOVE_RYO_RYU_KO_RANBU_S",
"MOVE_RYO_RYU_KO_RANBU_D",
"MOVE_RYO_HAOH_SHOKOH_KEN_S",
"MOVE_RYO_HAOH_SHOKOH_KEN_D",
],[
"MOVE_ROBERT_RYUU_GEKI_KEN_L",
"MOVE_ROBERT_RYUU_GEKI_KEN_H",
"MOVE_ROBERT_HIEN_SHIPPU_KYAKU_L",
"MOVE_ROBERT_HIEN_SHIPPU_KYAKU_H",
"MOVE_ROBERT_HIEN_RYUU_SHIN_KYA_L",
"MOVE_ROBERT_HIEN_RYUU_SHIN_KYA_H",
"MOVE_ROBERT_RYUU_GA_L",
"MOVE_ROBERT_RYUU_GA_H",
"MOVE_ROBERT_KYOKUGEN_RYU_RANBU_KYAKU_L",
"MOVE_ROBERT_KYOKUGEN_RYU_RANBU_KYAKU_H",
"MOVE_ROBERT_RYUU_GA_HIDDEN_L",
"MOVE_ROBERT_RYUU_GA_HIDDEN_H",
"MOVE_ROBERT_SPEC_6_L",
"MOVE_ROBERT_SPEC_6_H",
"MOVE_ROBERT_RYU_KO_RANBU_S",
"MOVE_ROBERT_RYU_KO_RANBU_D",
"MOVE_ROBERT_HAOH_SHOKOH_KEN_S",
"MOVE_ROBERT_HAOH_SHOKOH_KEN_D",
],[
"MOVE_ATHENA_PSYCHO_BALL_L",
"MOVE_ATHENA_PSYCHO_BALL_H",
"MOVE_ATHENA_PHOENIX_ARROW_L",
"MOVE_ATHENA_PHOENIX_ARROW_H",
"MOVE_ATHENA_PSYCHO_REFLECTOR_L",
"MOVE_ATHENA_PSYCHO_REFLECTOR_H",
"MOVE_ATHENA_PSYCHO_SWORD_L",
"MOVE_ATHENA_PSYCHO_SWORD_H",
"MOVE_ATHENA_PSYCHO_TELEPORT_L",
"MOVE_ATHENA_PSYCHO_TELEPORT_H",
"MOVE_ATHENA_SPEC_5_L",
"MOVE_ATHENA_SPEC_5_H",
"MOVE_ATHENA_SPEC_6_L",
"MOVE_ATHENA_SPEC_6_H",
"MOVE_ATHENA_SHINING_CRYSTAL_BIT_GS",
"MOVE_ATHENA_SHINING_CRYSTAL_BIT_GD",
"MOVE_ATHENA_SHINING_CRYSTAL_BIT_AS",
"MOVE_ATHENA_SHINING_CRYSTAL_BIT_AD",
],[
"MOVE_MAI_KA_CHO_SEN_L",
"MOVE_MAI_KA_CHO_SEN_H",
"MOVE_MAI_HISSATSU_SHINOBIBACHI_L",
"MOVE_MAI_HISSATSU_SHINOBIBACHI_H",
"MOVE_MAI_RYU_EN_BU_L",
"MOVE_MAI_RYU_EN_BU_H",
"MOVE_MAI_HISHO_RYU_EN_JIN_L",
"MOVE_MAI_HISHO_RYU_EN_JIN_H",
"MOVE_MAI_CHIJOU_MUSASABI_L",
"MOVE_MAI_CHIJOU_MUSASABI_H",
"MOVE_MAI_KUUCHUU_MUSASABI_L",
"MOVE_MAI_KUUCHUU_MUSASABI_H",
"MOVE_MAI_SPEC_6_L",
"MOVE_MAI_SPEC_6_H",
"MOVE_MAI_CHO_HISSATSU_SHINOBIBACHI_S",
"MOVE_MAI_CHO_HISSATSU_SHINOBIBACHI_D",
"MOVE_MAI_SUPER_1_S",
"MOVE_MAI_SUPER_1_D",
],[
"MOVE_LEONA_BALTIC_LAUNCHER_L",
"MOVE_LEONA_BALTIC_LAUNCHER_H",
"MOVE_LEONA_GRAND_SABRE_L",
"MOVE_LEONA_GRAND_SABRE_H",
"MOVE_LEONA_X_CALIBUR_L",
"MOVE_LEONA_X_CALIBUR_H",
"MOVE_LEONA_MOON_SLASHER_L",
"MOVE_LEONA_MOON_SLASHER_H",
"MOVE_OLEONA_STORM_BRINGER_L",
"MOVE_OLEONA_STORM_BRINGER_H",
"MOVE_LEONA_SPEC_5_L",
"MOVE_LEONA_SPEC_5_H",
"MOVE_LEONA_SPEC_6_L",
"MOVE_LEONA_SPEC_6_H",
"MOVE_LEONA_V_SLASHER_S",
"MOVE_LEONA_V_SLASHER_D",
"MOVE_OLEONA_SUPER_MOON_SLASHER_S",
"MOVE_OLEONA_SUPER_MOON_SLASHER_D",
],[
"MOVE_GEESE_REPPUKEN_L",
"MOVE_GEESE_REPPUKEN_H",
"MOVE_GEESE_JA_EI_KEN_L",
"MOVE_GEESE_JA_EI_KEN_H",
"MOVE_GEESE_HISHOU_NICHIRIN_ZAN_L",
"MOVE_GEESE_HISHOU_NICHIRIN_ZAN_H",
"MOVE_GEESE_SHIPPU_KEN_L",
"MOVE_GEESE_SHIPPU_KEN_H",
"MOVE_GEESE_ATEMI_NAGE_L",
"MOVE_GEESE_ATEMI_NAGE_H",
"MOVE_GEESE_SPEC_5_L",
"MOVE_GEESE_SPEC_5_H",
"MOVE_GEESE_SPEC_6_L",
"MOVE_GEESE_SPEC_6_H",
"MOVE_GEESE_RAGING_STORM_S",
"MOVE_GEESE_RAGING_STORM_D",
"MOVE_GEESE_SUPER_1_S",
"MOVE_GEESE_SUPER_1_D",
],[
"MOVE_KRAUSER_HIGH_BLITZ_BALL_L",
"MOVE_KRAUSER_HIGH_BLITZ_BALL_H",
"MOVE_KRAUSER_LOW_BLITZ_BALL_L",
"MOVE_KRAUSER_LOW_BLITZ_BALL_H",
"MOVE_KRAUSER_LEG_TOMAHAWK_L",
"MOVE_KRAUSER_LEG_TOMAHAWK_H",
"MOVE_KRAUSER_KAISER_KICK_L",
"MOVE_KRAUSER_KAISER_KICK_H",
"MOVE_KRAUSER_KAISER_DUEL_SOBAT_L",
"MOVE_KRAUSER_KAISER_DUEL_SOBAT_H",
"MOVE_KRAUSER_KAISER_SUPLEX_L",
"MOVE_KRAUSER_KAISER_SUPLEX_H",
"MOVE_KRAUSER_SPEC_6_L",
"MOVE_KRAUSER_SPEC_6_H",
"MOVE_KRAUSER_KAISER_WAVE_S",
"MOVE_KRAUSER_KAISER_WAVE_D",
"MOVE_KRAUSER_SUPER_1_S",
"MOVE_KRAUSER_SUPER_1_D",
],[
"MOVE_MRBIG_GROUND_BLASTER_L",
"MOVE_MRBIG_GROUND_BLASTER_H",
"MOVE_MRBIG_CROSS_DIVING_L",
"MOVE_MRBIG_CROSS_DIVING_H",
"MOVE_MRBIG_SPINNING_LANCER_L",
"MOVE_MRBIG_SPINNING_LANCER_H",
"MOVE_MRBIG_CALIFORNIA_ROMANCE_L",
"MOVE_MRBIG_CALIFORNIA_ROMANCE_H",
"MOVE_MRBIG_DRUM_SHOT_L",
"MOVE_MRBIG_DRUM_SHOT_H",
"MOVE_MRBIG_SPEC_5_L",
"MOVE_MRBIG_SPEC_5_H",
"MOVE_MRBIG_SPEC_6_L",
"MOVE_MRBIG_SPEC_6_H",
"MOVE_MRBIG_BLASTER_WAVE_S",
"MOVE_MRBIG_BLASTER_WAVE_D",
"MOVE_MRBIG_SUPER_1_S",
"MOVE_MRBIG_SUPER_1_D",
],[
"MOVE_IORI_YAMI_BARAI_L",
"MOVE_IORI_YAMI_BARAI_H",
"MOVE_IORI_ONI_YAKI_L",
"MOVE_IORI_ONI_YAKI_H",
"MOVE_IORI_AOI_HANA_L",
"MOVE_IORI_AOI_HANA_H",
"MOVE_IORI_KOTO_TSUKI_IN_L",
"MOVE_IORI_KOTO_TSUKI_IN_H",
"MOVE_IORI_SCUM_GALE_L",
"MOVE_IORI_SCUM_GALE_H",
"MOVE_IORI_SPEC_5_L",
"MOVE_IORI_SPEC_5_H",
"MOVE_IORI_KIN_YA_OTOME_ESCAPE_L",
"MOVE_IORI_KIN_YA_OTOME_ESCAPE_H",
"MOVE_IORI_KIN_YA_OTOME_S",
"MOVE_IORI_KIN_YA_OTOME_D",
"MOVE_OIORI_KIN_YA_OTOME_S",
"MOVE_OIORI_KIN_YA_OTOME_D",
],[
"MOVE_MATURE_DECIDE_L",
"MOVE_MATURE_DECIDE_H",
"MOVE_MATURE_METAL_MASSACRE_L",
"MOVE_MATURE_METAL_MASSACRE_H",
"MOVE_MATURE_DEATH_ROW_L",
"MOVE_MATURE_DEATH_ROW_H",
"MOVE_MATURE_DESPAIR_L",
"MOVE_MATURE_DESPAIR_H",
"MOVE_MATURE_SPEC_4_L",
"MOVE_MATURE_SPEC_4_H",
"MOVE_MATURE_SPEC_5_L",
"MOVE_MATURE_SPEC_5_H",
"MOVE_MATURE_SPEC_6_L",
"MOVE_MATURE_SPEC_6_H",
"MOVE_MATURE_HEAVENS_GATE_S",
"MOVE_MATURE_HEAVENS_GATE_D",
"MOVE_MATURE_SUPER_1_S",
"MOVE_MATURE_SUPER_1_D",
],[
"MOVE_CHIZURU_TENJIN_KOTOWARI_L",
"MOVE_CHIZURU_TENJIN_KOTOWARI_H",
"MOVE_CHIZURU_SHINSOKU_NOROTI_HIGH_L",
"MOVE_CHIZURU_SHINSOKU_NOROTI_HIGH_H",
"MOVE_CHIZURU_SHINSOKU_NOROTI_LOW_L",
"MOVE_CHIZURU_SHINSOKU_NOROTI_LOW_H",
"MOVE_CHIZURU_TEN_ZUI_L",
"MOVE_CHIZURU_TEN_ZUI_H",
"MOVE_CHIZURU_TAMAYURA_SHITSUNE_L",
"MOVE_CHIZURU_TAMAYURA_SHITSUNE_H",
"MOVE_CHIZURU_SPEC_5_L",
"MOVE_CHIZURU_SPEC_5_H",
"MOVE_CHIZURU_SPEC_6_L",
"MOVE_CHIZURU_SPEC_6_H",
"MOVE_CHIZURU_SAN_RAI_FUI_JIN_S",
"MOVE_CHIZURU_SAN_RAI_FUI_JIN_D",
"MOVE_CHIZURU_REIGI_ISHIZUE_S",
"MOVE_CHIZURU_REIGI_ISHIZUE_D",
],[
"MOVE_GOENITZ_YONOKAZE1",
"MOVE_GOENITZ_YONOKAZE2",
"MOVE_GOENITZ_YONOKAZE3",
"MOVE_GOENITZ_YONOKAZE4",
"MOVE_GOENITZ_HYOUGA_L",
"MOVE_GOENITZ_HYOUGA_H",
"MOVE_GOENITZ_WANPYOU_TOKOBUSE_L",
"MOVE_GOENITZ_WANPYOU_TOKOBUSE_H",
"MOVE_GOENITZ_YAMIDOUKOKU_SL",
"MOVE_GOENITZ_YAMIDOUKOKU_SH",
"MOVE_GOENITZ_SHINYAOTOME_THROW_L",
"MOVE_GOENITZ_SHINYAOTOME_THROW_H",
"MOVE_GOENITZ_SHINYAOTOME_PART2_L",
"MOVE_GOENITZ_SHINYAOTOME_PART2_H",
"MOVE_GOENITZ_SHINYAOTOME_MIZUCHI_SL",
"MOVE_GOENITZ_SHINYAOTOME_MIZUCHI_SH",
"MOVE_GOENITZ_SHINYAOTOME_JISSOUKOKU_DL",
"MOVE_GOENITZ_SHINYAOTOME_JISSOUKOKU_DH",
],[
"MOVE_MRKARATE_KO_OU_KEN_L",
"MOVE_MRKARATE_KO_OU_KEN_H",
"MOVE_MRKARATE_SHOURAN_KYAKU_L",
"MOVE_MRKARATE_SHOURAN_KYAKU_H",
"MOVE_MRKARATE_HIEN_SHIPPUU_KYAKU_L",
"MOVE_MRKARATE_HIEN_SHIPPUU_KYAKU_H",
"MOVE_MRKARATE_ZENRETSUKEN_L",
"MOVE_MRKARATE_ZENRETSUKEN_H",
"MOVE_MRKARATE_KYOKUKEN_RYU_RENBU_KEN_L",
"MOVE_MRKARATE_KYOKUKEN_RYU_RENBU_KEN_H",
"MOVE_MRKARATE_KO_OU_KEN_UNUSED_EL",
"MOVE_MRKARATE_KO_OU_KEN_UNUSED_EH",
"MOVE_MRKARATE_SPEC_6_L",
"MOVE_MRKARATE_SPEC_6_H",
"MOVE_MRKARATE_RYUKO_RANBU_S",
"MOVE_MRKARATE_RYUKO_RANBU_UNUSED_D",
"MOVE_MRKARATE_HAOH_SHO_KOH_KEN_S",
"MOVE_MRKARATE_HAOH_SHO_KOH_KEN_D",
],[
"MOVE_IORI_YAMI_BARAI_L",
"MOVE_IORI_YAMI_BARAI_H",
"MOVE_IORI_ONI_YAKI_L",
"MOVE_IORI_ONI_YAKI_H",
"MOVE_IORI_AOI_HANA_L",
"MOVE_IORI_AOI_HANA_H",
"MOVE_IORI_KOTO_TSUKI_IN_L",
"MOVE_IORI_KOTO_TSUKI_IN_H",
"MOVE_IORI_SCUM_GALE_L",
"MOVE_IORI_SCUM_GALE_H",
"MOVE_IORI_SPEC_5_L",
"MOVE_IORI_SPEC_5_H",
"MOVE_IORI_KIN_YA_OTOME_ESCAPE_L",
"MOVE_IORI_KIN_YA_OTOME_ESCAPE_H",
"MOVE_IORI_KIN_YA_OTOME_S",
"MOVE_IORI_KIN_YA_OTOME_D",
"MOVE_OIORI_KIN_YA_OTOME_S",
"MOVE_OIORI_KIN_YA_OTOME_D",
],[
"MOVE_LEONA_BALTIC_LAUNCHER_L",
"MOVE_LEONA_BALTIC_LAUNCHER_H",
"MOVE_LEONA_GRAND_SABRE_L",
"MOVE_LEONA_GRAND_SABRE_H",
"MOVE_LEONA_X_CALIBUR_L",
"MOVE_LEONA_X_CALIBUR_H",
"MOVE_LEONA_MOON_SLASHER_L",
"MOVE_LEONA_MOON_SLASHER_H",
"MOVE_OLEONA_STORM_BRINGER_L",
"MOVE_OLEONA_STORM_BRINGER_H",
"MOVE_LEONA_SPEC_5_L",
"MOVE_LEONA_SPEC_5_H",
"MOVE_LEONA_SPEC_6_L",
"MOVE_LEONA_SPEC_6_H",
"MOVE_LEONA_V_SLASHER_S",
"MOVE_LEONA_V_SLASHER_D",
"MOVE_OLEONA_SUPER_MOON_SLASHER_S",
"MOVE_OLEONA_SUPER_MOON_SLASHER_D",
],[
"MOVE_CHIZURU_TENJIN_KOTOWARI_L",
"MOVE_CHIZURU_TENJIN_KOTOWARI_H",
"MOVE_CHIZURU_SHINSOKU_NOROTI_HIGH_L",
"MOVE_CHIZURU_SHINSOKU_NOROTI_HIGH_H",
"MOVE_CHIZURU_SHINSOKU_NOROTI_LOW_L",
"MOVE_CHIZURU_SHINSOKU_NOROTI_LOW_H",
"MOVE_CHIZURU_TEN_ZUI_L",
"MOVE_CHIZURU_TEN_ZUI_H",
"MOVE_CHIZURU_TAMAYURA_SHITSUNE_L",
"MOVE_CHIZURU_TAMAYURA_SHITSUNE_H",
"MOVE_CHIZURU_SPEC_5_L",
"MOVE_CHIZURU_SPEC_5_H",
"MOVE_CHIZURU_SPEC_6_L",
"MOVE_CHIZURU_SPEC_6_H",
"MOVE_CHIZURU_SAN_RAI_FUI_JIN_S",
"MOVE_CHIZURU_SAN_RAI_FUI_JIN_D",
"MOVE_CHIZURU_REIGI_ISHIZUE_S",
"MOVE_CHIZURU_REIGI_ISHIZUE_D",
]];