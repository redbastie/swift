<?php

namespace Redbastie\Swift\Traits;

trait TextUtilities
{
    public function textJustify()
    {
        return $this->class('text-justify');
    }

    public function textSmJustify()
    {
        return $this->class('text-sm-justify');
    }

    public function textMdJustify()
    {
        return $this->class('text-md-justify');
    }

    public function textLgJustify()
    {
        return $this->class('text-lg-justify');
    }

    public function textXlJustify()
    {
        return $this->class('text-xl-justify');
    }

    public function textLeft()
    {
        return $this->class('text-left');
    }

    public function textSmLeft()
    {
        return $this->class('text-sm-left');
    }

    public function textMdLeft()
    {
        return $this->class('text-md-left');
    }

    public function textLgLeft()
    {
        return $this->class('text-lg-left');
    }

    public function textXlLeft()
    {
        return $this->class('text-xl-left');
    }

    public function textCenter()
    {
        return $this->class('text-center');
    }

    public function textSmCenter()
    {
        return $this->class('text-sm-center');
    }

    public function textMdCenter()
    {
        return $this->class('text-md-center');
    }

    public function textLgCenter()
    {
        return $this->class('text-lg-center');
    }

    public function textXlCenter()
    {
        return $this->class('text-xl-center');
    }

    public function textRight()
    {
        return $this->class('text-right');
    }

    public function textSmRight()
    {
        return $this->class('text-sm-right');
    }

    public function textMdRight()
    {
        return $this->class('text-md-right');
    }

    public function textLgRight()
    {
        return $this->class('text-lg-right');
    }

    public function textXlRight()
    {
        return $this->class('text-xl-right');
    }

    public function textWrap()
    {
        return $this->class('text-wrap');
    }

    public function textNowrap()
    {
        return $this->class('text-nowrap');
    }

    public function textTruncate()
    {
        return $this->class('text-truncate');
    }

    public function textBreak()
    {
        return $this->class('text-break');
    }

    public function textLowercase()
    {
        return $this->class('text-lowercase');
    }

    public function textUppercase()
    {
        return $this->class('text-uppercase');
    }

    public function textCapitalize()
    {
        return $this->class('text-capitalize');
    }

    public function textMonospace()
    {
        return $this->class('text-monospace');
    }

    public function textReset()
    {
        return $this->class('text-reset');
    }

    public function textDecorationNone()
    {
        return $this->class('text-decoration-none');
    }

    public function textPrimary()
    {
        return $this->class('text-primary');
    }

    public function textSecondary()
    {
        return $this->class('text-secondary');
    }

    public function textSuccess()
    {
        return $this->class('text-success');
    }

    public function textInfo()
    {
        return $this->class('text-info');
    }

    public function textDanger()
    {
        return $this->class('text-danger');
    }

    public function textWarning()
    {
        return $this->class('text-warning');
    }

    public function textLight()
    {
        return $this->class('text-light');
    }

    public function textDark()
    {
        return $this->class('text-dark');
    }

    public function textMuted()
    {
        return $this->class('text-muted');
    }

    public function textWhite()
    {
        return $this->class('text-white');
    }

    public function fontWeightBold()
    {
        return $this->class('font-weight-bold');
    }

    public function fontWeightBolder()
    {
        return $this->class('font-weight-bolder');
    }

    public function fontWeightNormal()
    {
        return $this->class('font-weight-normal');
    }

    public function fontWeightLight()
    {
        return $this->class('font-weight-light');
    }

    public function fontWeightLighter()
    {
        return $this->class('font-weight-lighter');
    }

    public function fontItalic()
    {
        return $this->class('font-italic');
    }

    public function display($display)
    {
        return $this->class('display-' . $display);
    }

    public function lead()
    {
        return $this->class('lead');
    }

    public function small()
    {
        return $this->class('small');
    }
}
