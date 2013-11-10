<?php

namespace AmericanReading\CLI\Message;

interface TerminalFormatInterface
{
    const TERMINAL_SET_BRIGHT = "\e[1m";
    const TERMINAL_SET_DIM = "\e[2m";
    const TERMINAL_SET_UNDERLINE = "\e[4m";
    const TERMINAL_SET_BLINK = "\e[5m";
    const TERMINAL_SET_REVERSE = "\e[7m";
    const TERMINAL_SET_HIDDEN = "\e[8m";

    const TERMINAL_RESET_ALL = "\e[0m";
    const TERMINAL_RESET_BRIGHT = "\e[21m";
    const TERMINAL_RESET_DIM = "\e[22m";
    const TERMINAL_RESET_UNDERLINE = "\e[24m";
    const TERMINAL_RESET_BLINK = "\e[25m";
    const TERMINAL_RESET_REVERSE = "\e[27m";
    const TERMINAL_RESET_HIDDEN = "\e[28m";

    const TERMINAL_COLOR_DEFAULT = "\e[39m";
    const TERMINAL_COLOR_BLACK = "\e[30m";
    const TERMINAL_COLOR_RED = "\e[31m";
    const TERMINAL_COLOR_GREEN = "\e[32m";
    const TERMINAL_COLOR_YELLOW = "\e[33m";
    const TERMINAL_COLOR_BLUE = "\e[34m";
    const TERMINAL_COLOR_MAGENTA = "\e[35m";
    const TERMINAL_COLOR_CYAN = "\e[36m";
    const TERMINAL_COLOR_LIGHT_GRAY = "\e[37m";
    const TERMINAL_COLOR_DARK_GRAY = "\e[90m";
    const TERMINAL_COLOR_LIGHT_RED = "\e[91m";
    const TERMINAL_COLOR_LIGHT_GREEN = "\e[92m";
    const TERMINAL_COLOR_LIGHT_YELLOW = "\e[93m";
    const TERMINAL_COLOR_LIGHT_BLUE = "\e[94m";
    const TERMINAL_COLOR_LIGHT_MAGENTA = "\e[95m";
    const TERMINAL_COLOR_LIGHT_CYAN = "\e[96m";
    const TERMINAL_COLOR_WHITE = "\e[97m";

    const TERMINAL_BACKGROUND_DEFAULT = "\e[49m";
    const TERMINAL_BACKGROUND_BLACK = "\e[40m";
    const TERMINAL_BACKGROUND_RED = "\e[41m";
    const TERMINAL_BACKGROUND_GREEN = "\e[42m";
    const TERMINAL_BACKGROUND_YELLOW = "\e[43m";
    const TERMINAL_BACKGROUND_BLUE = "\e[44m";
    const TERMINAL_BACKGROUND_MAGENTA = "\e[45m";
    const TERMINAL_BACKGROUND_CYAN = "\e[46m";
    const TERMINAL_BACKGROUND_LIGHT_GRAY = "\e[47m";
    const TERMINAL_BACKGROUND_DARK_GRAY = "\e[100m";
    const TERMINAL_BACKGROUND_LIGHT_RED = "\e[101m";
    const TERMINAL_BACKGROUND_LIGHT_GREEN = "\e[102m";
    const TERMINAL_BACKGROUND_LIGHT_YELLOW = "\e[103m";
    const TERMINAL_BACKGROUND_LIGHT_BLUE = "\e[104m";
    const TERMINAL_BACKGROUND_LIGHT_MAGENTA = "\e[105m";
    const TERMINAL_BACKGROUND_LIGHT_CYAN = "\e[106m";
    const TERMINAL_BACKGROUND_WHITE = "\e[107m";
}
