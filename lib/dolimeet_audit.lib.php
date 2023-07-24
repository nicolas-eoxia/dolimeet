<?php
/* Copyright (C) 2021-2023 EVARISK <technique@evarisk.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/**
 * \file    lib/dolimeet_audit.lib.php
 * \ingroup dolimeet
 * \brief   Library files with common functions for Audit.
 */

// Load DoliMeet libraries.
require_once __DIR__ . '/dolimeet_session.lib.php';

/**
 * Prepare audit pages header.
 *
 * @param  Audit     $object Audit.
 * @return array     $head   Array of tabs.
 * @throws Exception
 */
function audit_prepare_head(Audit $object): array
{
    $moreParams['documentType']       = 'AuditDocument';
    $moreParams['attendantTableMode'] = 'simple';

    return session_prepare_head($object, [], $moreParams);
}
