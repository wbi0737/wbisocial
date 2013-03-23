<?php

namespace Wbi\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wbi\ForumBundle\Entity\Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity
 */
class Posts
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $postTitle
     *
     * @ORM\Column(name="post_title", type="string", length=45, nullable=true)
     */
    private $postTitle;

    /**
     * @var string $postAutheur
     *
     * @ORM\Column(name="post_autheur", type="string", length=45, nullable=true)
     */
    private $postAutheur;

    /**
     * @var string $postContent
     *
     * @ORM\Column(name="post_content", type="text", nullable=true)
     */
    private $postContent;

    /**
     * @var \DateTime $postDate
     *
     * @ORM\Column(name="post_date", type="datetime", nullable=true)
     */
    private $postDate;

  	
  /**
   * @ORM\ManyToOne(targetEntity="Wbi\UserBundle\Entity\user")
   * @ORM\JoinColumn(nullable=false)
   */
   private $user;

 /**
     * @var underdomain
     *
     * @ORM\ManyToOne(targetEntity="Underdomain", inversedBy="posts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="underdomain_id", referencedColumnName="id")
     * })
     */
    private $underdomain;
	
	 /**
        * @ORM\OneToMany(targetEntity="Wbi\ForumBundle\Entity\Comments", mappedBy="posts")
        */
	  private $comments; 

		
	
	
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set postTitle
     *
     * @param string $postTitle
     * @return Posts
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;
    
        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string 
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postAutheur
     *
     * @param string $postAutheur
     * @return Posts
     */
    public function setPostAutheur($postAutheur)
    {
        $this->postAutheur = $postAutheur;
    
        return $this;
    }

    /**
     * Get postAutheur
     *
     * @return string 
     */
    public function getPostAutheur()
    {
        return $this->postAutheur;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     * @return Posts
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;
    
        return $this;
    }

    /**
     * Get postContent
     *
     * @return string 
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return Posts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    
        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }


    /**
     * Set user
     *
     * @param Wbi\UserBundle\Entity\user $user
     * @return Posts
     */
    public function setUser(\Wbi\UserBundle\Entity\user $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Wbi\UserBundle\Entity\user 
     */
    public function getUser()
    {
        return $this->user;
    }
   


    /**
     * Set underdomain
     *
     * @param Wbi\ForumBundle\Entity\Underdomain $underdomain
     * @return Posts
     */
    public function setUnderdomain(\Wbi\ForumBundle\Entity\Underdomain $underdomain = null)
    {
        $this->underdomain = $underdomain;
    
        return $this;
    }

    /**
     * Get underdomain
     *
     * @return Wbi\ForumBundle\Entity\Underdomain 
     */
    public function getUnderdomain()
    {
        return $this->underdomain;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->postDate = new \DateTime(); 
   }
    
    /**
     * Add comments
     *
     * @param Wbi\ForumBundle\Entity\Comments $comments
     * @return Posts
     */
    public function addComment(\Wbi\ForumBundle\Entity\Comments $comments)
    {
        $this->comments[] = $comments;
		$comments->setPosts($this);
        return $this;
    }

    /**
     * Remove comments
     *
     * @param Wbi\ForumBundle\Entity\Comments $comments
     */
    public function removeComment(\Wbi\ForumBundle\Entity\Comments $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}