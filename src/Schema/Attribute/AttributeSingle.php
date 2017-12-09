<?php

declare(strict_types=1);

namespace GoetasWebservices\XML\XSDReader\Schema\Attribute;

interface AttributeSingle extends AttributeItem
{
    const USE_OPTIONAL = 'optional';

    const USE_PROHIBITED = 'prohibited';

    const USE_REQUIRED = 'required';

    /**
     * @return \GoetasWebservices\XML\XSDReader\Schema\Type\Type|null
     */
    public function getType();

    /**
     * @return bool
     */
    public function isQualified();

    /**
     * @param bool $qualified
     */
    public function setQualified($qualified);

    /**
     * @return bool
     */
    public function isNil();

    /**
     * @param bool $nil
     */
    public function setNil($nil);

    /**
     * @return string
     */
    public function getUse();

    /**
     * @param string $use
     */
    public function setUse($use);
}
